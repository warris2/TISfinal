<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\UserController;

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
/* Rutas de los usuarios--------------------------------------------------- */

Route::resource('/users', UserController::class);

Route::resource('/grupos', GrupoController::class);

/*---------------------------------------------------------------------*/
Auth::routes();

Route::resource('/empresas',App\Http\Controllers\EmpresaController::class);
Route::resource('/convocatorias',App\Http\Controllers\ConvocatoriaController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

