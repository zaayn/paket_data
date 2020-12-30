@extends('layouts.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Daftar User</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/admin/home')}}"></i> Home</a></li>
                    <li class="active">User</li>
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
            <a href="/admin/tambah_user" class="btn btn-info btn-md">Tambah User</a>
            <hr>
            <div class="responsive-table">
              <table id="mydatatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                  <th style="width: 5%">ID</th>
                  <th style="width: 25%">Nama User</th>
                  <th style="width: 25%">Email</th>

                  <th style="width: 15%">Aksi</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>

                  <td>
                    <a href="#" class="btn btn-info btn-sm">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="#" class="btn btn-danger btn-sm">
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