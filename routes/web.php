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

Route::get('/login',[Ev1Controller::class,'index']);
Route::post('/login',[Ev1Controller::class,'attemp']) ->name ('login.attempt');

Route::get('/', function () {
    
    return view('welcome');
});
