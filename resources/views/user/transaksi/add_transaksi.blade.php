@extends('layouts.app_user')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Form Pembelian</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/user/home')}}"></i> Home</a></li>
                    <li class="active">Pembelian</li>
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
          
              
              <div class="col-md-12 panel-body" >
                <div class="col-md-12">
                  @include('admin.shared.components.alert')
                  <form action="{{route('store.transaksi')}}" method="post">
                    {{ csrf_field() }} 
                  <div class="form-group">
                    <div class="form-group col-md-12">
                        <label>Nomor :</label>
                        <div><input type="text" class="form-control"  name="no_hp" required></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Pilih Provider :</label>
                        <div>
                            <select class="form-control select2" name="provider">
                                <option value="telkomsel">Telkomsel</option>
                                <option value="indosat">Indosat Ooredoo</option>
                                <option value="xl">XL Axiata</option>
                                <option value="tri">Tri</option>
                                <option value="smartfren">Smartfren</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Kategori Produk :</label>
                        <div>
                            <select class="form-control" name="kategori">
                              <option value="paket data">Paket Data</option>
                              <option value="pulsa">Pulsa</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="{{asset('/admin/customer')}}" class="btn btn-secondary"> Cancel</a>
                    </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</div>
@endsection