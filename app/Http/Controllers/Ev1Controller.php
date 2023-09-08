<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Ev1Controller extends Controller
{
    function index(){
        return View('Ev1.index');
     }

     function list(){
        return View('Ev1.list');
     }


     function list2(){
        // Verifica si el usuario está autenticado antes de acceder a list2
        if(Auth::check()){
            $user = Auth::user();
            Session::put('name', $user->name);
            return view('admin.list2', ['name' => $user->name]);
        }
    }


     function login(){
        return View('Ev1.login');
     }
     function attemptlogin(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($credentials, $request?->remember)){
            $user = Auth::user();
            return redirect()->route('home2')->with('user', $user);
        }else{
            return redirect()->back()->withErrors(['error' => 'Credenciales incorrectas']);
        }


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
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('home2');
     }

     public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }



}
