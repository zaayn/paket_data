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
            <a href="/admin/tambah_produk" class="btn btn-info btn-md">Tambah Produk</a>
            <hr>
            <div class="responsive-table">
              <table id="mydatatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                  <th style="width: 5%">ID</th>
                  <th style="width: 15%">Provider</th>
                  <th style="width: 20%">Kategori</th>
                  <th style="width: 20%">Isi Paket</th>
                  <th style="width: 10%">Stok Paket</th>
                  <th style="width: 15%">Harga Paket</th>
                  <th style="width: 15%">Aksi</th>
                </thead>
                <tbody>
                @foreach($produks as $produk)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $produk->p_provider }}</td>
                  <td>{{ $produk->p_kategori }}</td>
                  <td>{{ $produk->p_isi }}</td>
                  <td>{{ $produk->p_stok }}</td>
                  <td>{{ $produk->p_harga }}</td>

                  <td>
                    <a href="{{route('edit.produk',$produk->p_id)}}" class="btn btn-info btn-sm">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="{{route('delete.produk',$produk->p_id)}}" class="btn btn-danger btn-sm">
                      <span class="fa fa-trash"></span>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
</div>
@endsection