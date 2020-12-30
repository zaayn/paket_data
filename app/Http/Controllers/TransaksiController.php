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
        $data['transaksis'] = Transaksi::all();
        return view('user/transaksi/transaksi',$data);
    }
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
        $data = Produk::findorFail($p_id);
        $transaksi = new transaksi;
        $transaksi->id          = Auth::user()->id;
        $transaksi->p_id        = $p_id;
        $transaksi->no_hp       = $no_hp;
        $transaksi->t_total     = $data->p_harga;
        $transaksi->t_status      = "Pending";
        

        if ($transaksi->save()){
            return redirect('/user/transaksi')->with('success', 'Transaksi anda sedang diproses. Segera lakukan pembayaran');

        }
        else{
            return redirect('/user/transaksi/pilih_produk')->with('error', 'item gagal ditambahkan');
        }
    }
}
