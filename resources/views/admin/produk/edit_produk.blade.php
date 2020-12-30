@extends('layouts.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Daftar Produk</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/admin/home')}}"></i> Home</a></li>
                    <li class="active">Produk</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                @include('admin.shared.components.alert')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                <form action="{{route('update.produk', $produk->p_id)}}" method="post">
                    @csrf
                    @method('put') 
                  <div class="form-group">
                    <div class="form-group col-md-12">
                        <label>Provider Produk :</label>
                        <div>
                            <select class="form-control" name="p_provider" >
                                @if (old('p_provider') == $produk->p_provider)
                                    <option value="{{ $produk->p_provider }}" selected>{{ $produk->p_provider }}</option>
                                @else
                                    <option value="{{ $produk->p_provider }}">{{ $produk->p_provider }}</option>
                                    <option value="telkomsel">Telkomsel</option>
                                    <option value="indosat">Indosat Ooredoo</option>
                                    <option value="xl">XL Axiata</option>
                                    <option value="tri">Tri</option>
                                    <option value="smartfren">Smartfren</option>
                                @endif
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Kategori Produk :</label>
                        <div>
                            <select class="form-control" name="p_kategori" value="{{ $produk->p_kategori }}" >
                                @if (old('p_kategori') == $produk->p_kategori)
                                    <option value="{{ $produk->p_kategori }}" selected>{{ $produk->p_kategori }}</option>
                                @else
                                    <option value="{{ $produk->p_kategori }}">{{ $produk->p_kategori }}</option>
                                    <option value="paket data">Paket Data</option>
                                    <option value="pulsa">Pulsa</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Kuota :</label>
                      <div><input type="text" class="form-control"  name="p_isi" value="{{ $produk->p_isi }}" required></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Stok Produk :</label>
                        <div><input type="text" class="form-control"  name="p_stok" value="{{ $produk->p_stok }}" required></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Harga :</label>
                        <div><input type="text-area" class="form-control"  name="p_harga" value="{{ $produk->p_harga }}" required></div>
                    </div>
                    
                    
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="{{asset('/admin/produk')}}" class="btn btn-secondary"> Cancel</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection