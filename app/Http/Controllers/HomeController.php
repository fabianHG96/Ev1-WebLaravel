<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index2(){
        $authenticated_user = Auth::user();
        return View('admin.index2')->with(['user' => $authenticated_user]);
    }

}
