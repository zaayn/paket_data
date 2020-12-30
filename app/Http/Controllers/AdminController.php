<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function admin(){
        $data['no'] = 1;
        $data['admins'] = User::where('role','admin')->get();

        

        return view('/admin/user/admin',$data);    
    }
    public function user(){
        $data['no'] = 1;
        $data['users'] = User::where('role','user')->get();
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
        
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path(); // Getting current URI like 'category/books/'
        array_unshift($links, $currentLink); // Putting it in the beginning of links array
        session(['links' => $links]); // Saving links array to the session

        if ($users->save()){
            // return redirect('/admin/tambah_user')->with('success', 'item berhasil ditambahkan');
            return redirect(session('links')[2]);
        }
        else{
            return redirect('/admin/tambah_user')->with('error', 'item gagal ditambahkan');
        }
    }
    public function edit($email)
	{
        $user = User::findorFail($email);
    	return view('/admin/user/edit_user')->with('user',$user);
	}
    public function update(Request $request, $id){
        
        $user = User::findorFail($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->role     = $request->role;
        
        if ($user->save())
            return redirect('admin/tambah_user')->with('success', 'item berhasil diupdate');
        else {
            return redirect('admin/tambah_user')->with('error', 'item gagal diupdate');
        }
    }
}
