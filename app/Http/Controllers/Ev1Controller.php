<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     function attemptregister(){
            return view('Ev1.register');
     }
     function ej(){
        return View('admin.ej');
     }


}
