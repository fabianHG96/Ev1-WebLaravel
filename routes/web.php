<?php
use App\Http\Controllers\Ev1Controller;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home',[Ev1Controller::class,'index']);
Route::get('/menu',[Ev1Controller::class,'list']);

Route::get('/', function () {

    return view('welcome');
});
