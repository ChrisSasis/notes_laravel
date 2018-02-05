<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
    	$users = Auth::user();
    	return view('user.profile', ['users' => $users]);
    }

    public function edit($id)
    {
    	$users = Auth::user($id);
    	return view('user.settings', ['users' => $users]);
    }

    public function update(Request $request, $id)
    {
    	$users = Auth::user()->find($id);
    	dd($users);
    	// $users->username = $request->username;
    	// $users->save();	

    	// return redirect('user.profile');
    }
}
