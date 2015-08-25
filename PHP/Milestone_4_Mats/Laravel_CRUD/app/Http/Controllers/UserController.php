<?php namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller {

	public function all_users() {
		$users = User::all();
		//dd($users->getArray());
		return view('all_users', 
			['users' => $users->getArray()]);
	}

}
