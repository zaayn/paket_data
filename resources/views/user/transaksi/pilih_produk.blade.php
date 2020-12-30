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
    @foreach($temps as $temp)
    <a href="{{route('store.transaksi2', ['p_id' => $temp->p_id, 'no_hp' => $no_hp])}}">
        <div class="col-md-4">
            <div class="panel box-v1">
                <div class="panel-heading bg-white border-none">
                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                        <h4 class="text-left">{{$kategori}} {{$provider}} {{$no_hp}}</h4>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                        <h4>
                            <span class="icon-user icons icon text-right"></span>
                        </h4>
                    </div>
                </div>
                <div class="panel-body text-center">
                    <h1>{{$temp->p_isi}}</h1>
                    <p>Rp {{$temp->p_harga}}</p>
                    <hr/>
                </div>
            </div>
        </div>
    </a>
    @endforeach
@endsection