<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
   public function index(){
    return view('Auth.login');
   }

   public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/redirect');             
        }else{
            return redirect()->back()->with('fail', 'Wrong Crendentials');
        }
   }

   public function logout(Request $request){
      Auth::logout();
      return redirect('/');
   }

   public function redirect(){
       if(Auth::user()->usertype == 'admin'){
        return redirect('/admin/dashboard');
       }else{
        return redirect('/');
       }
   }
}
