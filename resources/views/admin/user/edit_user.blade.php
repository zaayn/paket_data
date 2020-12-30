@extends('layouts.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Formulir Edit User</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/admin/home')}}"></i> Home</a></li>
                    <li class="active">Tambah Admin</li>
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
                  <form class="cmxform" id="signupForm" action="{{route('update.user', $user->email)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="col-md-6">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="validate_firstname" name="name" value="{{ $user->name}}" required>
                        <span class="bar"></span>
                        <label>FullName</label>
                      </div>
        
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text" id="validate_username" name="email" value="{{ $user->email }}" required>
                        <span class="bar"></span>
                        <label>Email</label>
                      </div>
                    </div>
        
                    <div class="col-md-6">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" id="validate_password" name="password" required>
                        <span class="bar"></span>
                        <label>Password</label>
                      </div>
        
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" class="form-text" id="validate_confirm_password" name="validate_confirm_password" required>
                        <span class="bar"></span>
                        <label>Confirm Password</label>
                      </div>
                    </div>  
                    <div class="col-md-6">
                      <div class="col-md-6" >
                        <div class="form-group form-animate-checkbox">
                          <input type="checkbox" class="checkbox" name="role" value="admin">
                          <label style="padding-left: 10px"> Admin</label>
                        </div>
                      </div>
                      <div class="col-md-6" >
                        <div class="form-group form-animate-checkbox">
                          <input type="checkbox" class="checkbox" name="role" value="user">
                          <label style="padding-left: 10px"> User</label>
                        </div>
                      </div>
                    </div>                 
                    <div class="col-md-12" style="padding-top: 30px">
                        <input class="submit btn btn-danger" type="submit" >
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