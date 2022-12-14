<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\RegistroUsuariosController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//pagina principla
Route::get('/', [App\Http\Controllers\Inicio::class, 'index'])->name('index');
//dentro del sistema
Route::get('/welcome', [App\Http\Controllers\Inicio::class, 'welcome'])->name('welcome');
Route::get('/abecedario', [App\Http\Controllers\Inicio::class, 'abecedario'])->name('abecedario');
Route::get('/cuerpo', [App\Http\Controllers\Inicio::class, 'cuerpo'])->name('cuerpo');
Route::get('/diccionario', [App\Http\Controllers\Inicio::class, 'diccionario'])->name('diccionario');
Route::get('/numeracion', [App\Http\Controllers\Inicio::class, 'numeracion'])->name('numeracion');
Route::get('/cursos', [App\Http\Controllers\Inicio::class, 'cursos'])->name('cursos');
Route::get('/profesores', [App\Http\Controllers\Inicio::class, 'profesores'])->name('profesores');

Route::get('/grafias.letraA', [App\Http\Controllers\Inicio::class, 'modalAlfabeto'])->name('modalAlfabeto');

Route::get('/perfil' , [App\Http\Controllers\PerfilController::class, 'show'])->name('perfil');
//Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'perfil'])->name('perfil');


Route::get('/grafias.letra_a', [App\Http\Controllers\Letras::class, 'letra_a'])->name('grafias.letra_a');
Route::get('/grafias.letra_ch', [App\Http\Controllers\Letras::class, 'letra_ch'])->name('grafias.letra_ch');
Route::get('/grafias.letra_e', [App\Http\Controllers\Letras::class, 'letra_e'])->name('grafias.letra_e');
Route::get('/grafias.letra_h', [App\Http\Controllers\Letras::class, 'letra_h'])->name('grafias.letra_h');
Route::get('/grafias.letra_i', [App\Http\Controllers\Letras::class, 'letra_i'])->name('grafias.letra_i');
Route::get('/grafias.letra_k', [App\Http\Controllers\Letras::class, 'letra_k'])->name('grafias.letra_k');
Route::get('/grafias.letra_kw', [App\Http\Controllers\Letras::class,'letra_kw'])->name('grafias.letra_kw');
Route::get('/grafias.letra_l', [App\Http\Controllers\Letras::class, 'letra_l'])->name('grafias.letra_l');
Route::get('/grafias.letra_m', [App\Http\Controllers\Letras::class, 'letra_m'])->name('grafias.letra_m');
Route::get('/grafias.letra_n', [App\Http\Controllers\Letras::class, 'letra_n'])->name('grafias.letra_n');
Route::get('/grafias.letra_o', [App\Http\Controllers\Letras::class, 'letra_o'])->name('grafias.letra_o');
Route::get('/grafias.letra_p', [App\Http\Controllers\Letras::class, 'letra_p'])->name('grafias.letra_p');
Route::get('/grafias.letra_s', [App\Http\Controllers\Letras::class, 'letra_s'])->name('grafias.letra_s');
Route::get('/grafias.letra_t', [App\Http\Controllers\Letras::class, 'letra_t'])->name('grafias.letra_t');
Route::get('/grafias.letra_tl', [App\Http\Controllers\Letras::class,'letra_tl'])->name('grafias.letra_tl');
Route::get('/grafias.letra_ts', [App\Http\Controllers\Letras::class,'letra_ts'])->name('grafias.letra_ts');
Route::get('/grafias.letra_w', [App\Http\Controllers\Letras::class, 'letra_w'])->name('grafias.letra_w');
Route::get('/grafias.letra_x', [App\Http\Controllers\Letras::class, 'letra_x'])->name('grafias.letra_x');
Route::get('/grafias.letra_y', [App\Http\Controllers\Letras::class, 'letra_y'])->name('grafias.letra_y');


//--------------login-------------------------------------



// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.authenticate');




// Register
Route::get('/register', [RegistroUsuariosController::class, 'register'])->name('auth.register');
Route::post('/register', [RegistroUsuariosController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
