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

Route::get('/home',[Ev1Controller::class,'index'])->name('home');
Route::get('/menu',[Ev1Controller::class,'list']);

Route::group(['prefix'=> 'login'],function(){
Route::get('/',[Ev1Controller::class,'login'])->name('login');
Route::post('/',[Ev1Controller::class,'attemptlogin'])->name('login.attempt');

});
Route::group(['prefix'=> 'register'],function(){
    Route::get('/',[Ev1Controller::class,'register'])->name('register');
    Route::post('/',[Ev1Controller::class,'attemptregister'])->name('register.attempt');

});

Route::get('/', function () {

    return view('welcome');
});
