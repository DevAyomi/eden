<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }

    public function store(Request $request){

        $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|unique:users,email|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = new User;

        $user->fullname = $request->fullname;
        $user->usertype = 'user';
        $user->email = $request->email;
        $password = $request->password;
        $user->password = Hash::make($password);

        $user->save();
        return redirect('/login')->with('success','Registeration Successfull, Kindly Login');


    }
}
