<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
