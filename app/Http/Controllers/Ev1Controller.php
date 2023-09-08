<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Ev1Controller extends Controller
{
    function index(){
        return View('Ev1.index');
     }

     function list(){
        return View('Ev1.list');
     }

     function login(){
        return View('Ev1.login');
     }
     function attemptlogin(){
            return view('Ev1.login');
     }
     function register(){
        return View('Ev1.register');
     }


    function storageAccount(Request $request){
        $request->validate([
            'name'=> 'required | string',
            'apellidos' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);


        $user = User::create([
            'name'=> $request->name,
            'apellidos' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('home');
     }





}
