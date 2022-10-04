<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlfabetoController;
use App\Http\Controllers\QuienesSomos;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Letras;
use App\Http\Controllers\Letra_a;
use App\Http\Controllers\Grafias;
use App\Http\Controllers\TablaSaludo;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layouts.abecedario', [App\Http\Controllers\Abecedario::class, 'abecedario'])->name('abecedario');
Route::get('/layouts.perfil', [App\Http\Controllers\Perfil::class, 'perfil'])->name('perfil');
Route::get('/profesores', [App\Http\Controllers\Profesores::class, 'profesores'])->name('profesores');
Route::get('/welcome', [App\Http\Controllers\Inicio::class, 'welcome'])->name('welcome');
Route::get('/quienesSomos', [App\Http\Controllers\QuienesSomos::class, 'quienesSomos'])->name('quienesSomos');
Route::get('/cursos', [App\Http\Controllers\Cursos::class, 'cursos'])->name('cursos');

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

