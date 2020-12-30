<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $data['member'] = User::where('role','user')->count();
        // $data['transaksi'] = User::where('role','user')->count();
        // $data['produk'] = User::where('role','user')->count();
        return view('/admin/dashboard',$data);
    }
    public function user()
    {
        return view('/user/dashboard_user');
    }
}
