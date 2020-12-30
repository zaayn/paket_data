<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Produk;

class ProdukController extends Controller
{
    public function index(){
        $data['no'] = 1;
        $data['produks'] = Produk::all();
        return view('admin/produk/produk',$data);
    }
    public function insert(){
        
        return view('admin/produk/tambah_produk');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'p_provider'    =>['required', 'string'],
            'p_kategori'    =>['required', 'string'],
            'p_isi'         =>['required'],
            'p_stok'        =>['required','integer'],
            'p_harga'       =>['required','integer']
        ]);

        $produk = new produk;
        $produk->p_provider  = $request->p_provider;
        $produk->p_kategori  = $request->p_kategori;
        $produk->p_isi       = $request->p_isi;
        $produk->p_stok      = $request->p_stok;
        $produk->p_harga     = $request->p_harga;

        if ($produk->save()){
            return redirect('/admin/produk')->with('success', 'item berhasil ditambahkan');

        }
        else{
            return redirect('/admin/produk/tambah_produk')->with('error', 'item gagal ditambahkan');
        }
    }
    public function edit($p_id)
	{
        $produk = Produk::findorFail($p_id);
    	return view('/admin/produk/edit_produk')->with('produk',$produk);
    }
    public function update(Request $request, $p_id){
        
        $produk = Produk::findorFail($p_id);
        $produk->p_provider     = $request->p_provider;
        $produk->p_kategori    = $request->p_kategori;
        $produk->p_isi     = $request->p_isi;
        $produk->p_stok     = $request->p_stok;
        $produk->p_harga     = $request->p_harga;
        
        if ($produk->save())
            return redirect('admin/produk')->with('success', 'item berhasil diupdate');
        else {
            return redirect()->back()->with('error', 'item gagal diupdate');
        }
    }
    public function delete($p_id){
        $produk = Produk::findOrFail($p_id)->delete();
        return redirect()->route('produk')->with('success', 'delete sukses');
    }
}
