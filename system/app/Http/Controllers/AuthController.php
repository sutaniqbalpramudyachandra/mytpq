<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');
	}

	function loginProcess(User $user){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			if(Auth::User()->level1 == "admin") {
				return redirect('admin/')->with('success','Selamat datang');
			}
		} else {
			return back()->with('danger', 'Login gagal, Silahkan coba kembali');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function forgotPassword(){
		
	}

}