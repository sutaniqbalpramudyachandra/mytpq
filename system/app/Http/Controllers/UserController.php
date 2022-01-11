<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
	function beranda(){
		return view('user.beranda');
	}

	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}

	function create(){
		// $data['list_pondok'] = Pondok::all();
		// return view('admin.user.create',$data);
		return view('user.create');
	}

	function store(){
		$user = new User;
		$user->id_tpq = request('id_tpq');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->level1 = request('level1');
		$user->save();

		return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
	}

	function show(User $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}

	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}

	function update(User $user){
		$user->id_tpq = request('id_tpq');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->level1 = request('level1');
		$user->save();

		return redirect('admin/user')->with('success','Data Berhasil Diubah');
	}

	function destroy(user $user){
		$user->delete();
		return redirect('admin/user')->with('danger','Data Berhasil Dihapus');
	}

}