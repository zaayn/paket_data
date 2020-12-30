<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function user(){
        $data['no'] = 1;
        $data['users'] = User::all();
        return view('/admin/user/user',$data);    
    }
    public function insert(){
        return view('admin/user/tambah_user');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          =>['required', 'string'],
            'password'      =>['required', 'string'],
            'email'         =>['required', 'string','unique:users'],
            'role'          =>['required']
        ]);

        $users = new user;
        $users->name            = $request->name;
        $users->password       = $request->password;
        $users->email          = $request->email;
        $users->role           = $request->role;

        if ($users->save()){
            return redirect('/admin/user/user')->with('success', 'item berhasil ditambahkan');

        }
        else{
            return redirect('/admin/user/tambah_user')->with('error', 'item gagal ditambahkan');
        }
    }
    public function edit($email)
	{
        $user = User::findorFail($email);
    	return view('/admin/admin/edit_user')->with('user',$user);
	}
    public function update(Request $request, $id){
        
        $user = User::findorFail($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->role     = $request->role;
        
        if ($user->save())
            return redirect('admin/user/user')->with('success', 'item berhasil diupdate');
        else {
            return redirect('admin/user/user')->with('error', 'item gagal diupdate');
        }
    }
    public function delete($email){
        $user = User::findOrFail($email)->delete();
        return redirect()->route('user')->with('success', 'delete sukses');
    }
}
