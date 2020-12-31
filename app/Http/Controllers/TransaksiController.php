<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Transaksi;
use App\Produk;

class TransaksiController extends Controller
{
    public function index(){
        $data['no'] = 1;
        $data['transaksis'] = Transaksi::where('id',Auth::user()->id)->where(function($q) {
            $q->where('t_status', 'Pending')
            ->orWhere('t_status', 'Proses');
        })->get();
        
        return view('user/transaksi/transaksi',$data);
    }
    public function history(){
        $data['no'] = 1;
        $data['transaksis'] = Transaksi::where('t_status','Sukses')->where('id',Auth::user()->id)->get();
        return view('user/transaksi/history',$data);
    }

    // admin -----------------------------------
    public function index_admin(){
        $data['no'] = 1;
        $data['transaksis'] = Transaksi::Where('t_status','Proses')->orWhere('t_status','Pending')->get();
        return view('admin/transaksi/transaksi',$data);
    }
    public function rekap_admin(){
        $data['no'] = 1;
        $data['transaksis'] = Transaksi::all();
        return view('admin/transaksi/rekap',$data);
    }
    // end admin ------------------------------------

    public function insert(){
        return view('user/transaksi/add_transaksi');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_hp'    =>['required', 'string'],
        ]);

        
        $no_hp       = $request->no_hp;
        $provider   = $request->provider;
        $kategori   = $request->kategori;
        
        $data['temps'] = DB::table('produk')
        ->where('p_provider','=',$provider)
        ->where('p_kategori','=',$kategori)
        ->get();
        
        
        return view('/user/transaksi/pilih_produk',$data)->with('no_hp',$no_hp)->with('kategori',$kategori)->with('provider',$provider);
    }
    
    public function pilih($temps){
        return view('user/transaksi/pilih_produk');
    }

    public function store2($p_id, $no_hp)
    {
        $produk = Produk::findorFail($p_id);
        $transaksi = new transaksi;
        $transaksi->id          = Auth::user()->id;
        $transaksi->p_id        = $p_id;
        $transaksi->no_hp       = $no_hp;
        $transaksi->t_total     = $produk->p_harga;
        $transaksi->t_status    = "Pending";
        
        $produk->p_stok       -= 1;
        

        if ($transaksi->save() && $produk->save()){
            return redirect('/user/pembayaran')->with('success', 'Transaksi anda sedang diproses. Segera lakukan pembayaran');

        }
        else{
            return redirect('/user/transaksi/pilih_produk')->with('error', 'item gagal ditambahkan');
        }
    }

    // admin
    public function edit_pembayaran($t_id)
    {
        $transaksi = Transaksi::findorFail($t_id);
        $transaksi->t_status     = "Sukses";

        $transaksi->save();
        return redirect()->back();
    }
    // end admin

    public function upload($t_id){
        $data = Transaksi::findorFail($t_id);
        return view('user/transaksi/up_bukti')->with('data',$data);
    }
    public function storefile(Request $request, $t_id)
    {
        $transaksi = Transaksi::findorFail($t_id);
        $file = $request->file('t_file');
        $file->move(public_path()."/bukti pembayaran/",$file->getClientOriginalName()); 

        $transaksi->t_file     = $file->getClientOriginalName();
        $transaksi->t_status    = "Proses";
        $transaksi->save();
        return redirect('user/pembayaran');
    }
}
