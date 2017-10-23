<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mailus;

class userController extends Controller
{	
	public function manageUser(){
		$users= User::paginate(10);
		return view('admin.user.manageUser',['users'=>$users]);
	}

	public function userMassage(){
		$massages= Mailus::paginate(10);
		return view('admin.user.massage',['massages'=>$massages]);
	}
    
}
