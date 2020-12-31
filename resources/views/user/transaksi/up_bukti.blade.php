@extends('layouts.app_user')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Upload Bukti Pembayaran</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/user/home')}}"></i> Home</a></li>
                    <li class="active">Upload Bukti Pembayaran</li>
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
                  <form action="{{route('store.file',$data->t_id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }} 
                   
                  <div class="form-group">
                    <div class="form-group col-md-12">
                        <label>Upload Bukti pembayaran :</label>
                        <div><input type="file" class="form-control"  name="t_file" required></div>
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