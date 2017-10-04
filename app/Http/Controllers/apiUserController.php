<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class apiUserController extends Controller
{
    public function returnAllUsers()
    {
    	$users = User::all();
		return $users;
    }

    public function returnUserById($id)
    {
    	$user = User::find($id);
		return $user;
    }
}
