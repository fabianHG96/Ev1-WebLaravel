<?php
use App\Http\Controllers\Ev1Controller;
use App\Http\Controllers\HomeController;
use App\Models\Categoria;
use App\Models\Producto;
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
Route::get('/menu',[Ev1Controller::class,'list'])->name('menu');
Route::get('/logout',[Ev1Controller::class,'logout'])->name('logout');

Route::group(['prefix'=> 'login'],function(){
Route::get('/',[Ev1Controller::class,'login'])->name('login');
Route::post('/',[Ev1Controller::class,'attemptlogin'])->name('login.attempt');

});

Route::group(['prefix'=> 'register'],function(){
    Route::get('/',[Ev1Controller::class,'register'])->name('register');
    Route::post('/',[Ev1Controller::class,'storageAccount'])->name('register.attempt');

});
Route::get('/home2', [HomeController::class, 'index2'])->name('home2')->middleware('auth');

Route::get('/', function () {

    return view('welcome');
});
// // CATEGORIA CAFÉ
// $categorias = Categoria::create(['categoria' => 'Café']);
// //   CAFÉ PRODUCTO 1
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Espresso',
//     'precio' => 2900,
//     'descripción' => 'Shot café en grano',
//     'imagen' => './assets/img/espresso.png'
// ]);
// //   CAFÉ PRODUCTO 2
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Capuccino',
//     'precio' => 3900,
//     'descripción' => 'Shot café en grano con leche',
//     'imagen' => './assets/img/capuccino.jpg'
// ]);
// //   CAFÉ PRODUCTO 3
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Cafe cortado',
//     'precio' => 2400,
//     'descripción' => 'Shot café en grano con leche y espuma',
//     'imagen' => './assets/img/cortado.png'
// ]);
// //   CAFÉ PRODUCTO 4
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Mokaccino',
//     'precio' => 4200,
//     'descripción' => 'Shot café en grano con leche y chocolate',
//     'imagen' => './assets/img/mokaccino.png'
// ]);
// //   CAFÉ PRODUCTO 5
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Café helado',
//     'precio' => 4900,
//     'descripción' => 'Café, leche, crema y helado de vainilla',
//     'imagen' => './assets/img/cafehelado.png'
// ]);
// // CATEGORIA POSTRES
// $categorias = Categoria::create(['categoria' => 'Postres']);
// //   POSTRES PRODUCTO 1
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Torta (Variedades)',
//     'precio' => 5900,
//     'descripción' => 'Variedad de trozo de tortas',
//     'imagen' => './assets/img/tortas.png' 
// ]);
// //   POSTRES PRODUCTO 2
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Dona',
//     'precio' => 2900,
//     'descripción' => 'Variedad de donas',
//     'imagen' => './assets/img/dona.png'
// ]);
// //   POSTRES PRODUCTO 3
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Croissant',
//     'precio' => 2900,
//     'descripción' => 'Croissant tradicional',
//     'imagen' => './assets/img/medialuna.png' 
// ]);
// //   POSTRES PRODUCTO 4
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Kuchen (Variedades)',
//     'precio' => 4900,
//     'descripción' => 'Variedad de trozo de kuchenes',
//     'imagen' => './assets/img/kuchen.png' 
// ]);
// //   POSTRES PRODUCTO 5
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Pie de Limón',
//     'precio' => 4900,
//     'descripción' => 'Trozo de pie de limón',
//     'imagen' => './assets/img/piedelimon.png' 
// ]);
// // CATEGORIA SANDWICHES
// $categorias = Categoria::create(['categoria' => 'Sandwiches']);
// //   SANDWICHES PRODUCTO 1
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Ave Palta',
//     'precio' => 8900,
//     'descripción' => 'Pechuga de ave asada a la planca, palta y mayonesa',
//     'imagen' => './assets/img/avepalta.png' 
// ]);
// //   SANDWICHES PRODUCTO 2
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Amasado Mechada Queso',
//     'precio' => 6900,
//     'descripción' => 'Rico pan amasado con carne mechada y queso',
//     'imagen' => './assets/img/mechadaqueso.png'
// ]);
// //   SANDWICHES PRODUCTO 3
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Barros Jarpa',
//     'precio' => 6500,
//     'descripción' => 'Pan planchado, queso y jamón',
//     'imagen' => './assets/img/barrosjarpa.png'
// ]);
// //   SANDWICHES PRODUCTO 4
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Sandwich a lo pobre',
//     'precio' => 8900,
//     'descripción' => 'Rico pan amasado con vacuno, cebolla, huevo frito y tocino',
//     'imagen' => './assets/img/alopobre.png'
// ]);
// //   SANDWICHES PRODUCTO 5
// $productos = Producto::create([
//     'id_categoria' => $categorias->id,
//     'nombre' => 'Hamburguesa casera',
//     'precio' => 7900,
//     'descripción' => 'Hamburguesa casera, lechuga, tomate, cebolla morada, queso y pepinillos',
//     'imagen' => './assets/img/hamburguesacasera.png'
// ]);