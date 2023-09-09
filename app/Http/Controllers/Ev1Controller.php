<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class Ev1Controller extends Controller {
    function index(){
        return View('Ev1.index');
     }

     function list(){
      $categorias = Categoria::with('productos')->get();
         return View('Ev1.list', ['categorias' => $categorias]);
     }

     function categorias(){
      return $this->belongsTo(Categoria::class);
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

    public function obtenerDato() {
      $dato = DB::table('categorias')
                ->where('id', 2)
                ->value('categoria'); // Suponiendo que el nombre del campo es "nombre"
  
      return view('menu_content', ['dato' => $dato]);
   }

}