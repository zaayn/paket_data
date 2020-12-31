@extends('layouts.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Transaksi Anda</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/user/home')}}"></i> Home</a></li>
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
            
            <div class="responsive-table">
              <table id="mydatatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                  <th style="width: 5%">ID</th>
                  <th style="width: 10%">Nama </th>
                  <th style="width: 15%">Email </th>
                  <th style="width: 10%">Nomor </th>
                  <th style="width: 15%">Produk</th>
                  <th style="width: 15%">Deskripsi Paket</th>
                  <th style="width: 10%">Total Harga</th>
                  <th style="width: 5%">Status Transaksi</th>
                  <th style="width: 10%">Bukti</th>
                  
                </thead>
                <tbody>
                @foreach($transaksis as $transaksi)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $transaksi->user->name }}</td>
                    <td>{{ $transaksi->user->email }}</td>
                    <td>{{ $transaksi->no_hp }}</td>
                    <td>{{ $transaksi->produk->p_kategori }} {{ $transaksi->produk->p_provider}}</td>
                    <td>{{ $transaksi->produk->p_isi }}</td>
                    <td>{{ $transaksi->produk->p_harga }}</td>
                    <td>{{ $transaksi->t_status }}</td>
                    <td>{{ $transaksi->t_file }}</td>
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