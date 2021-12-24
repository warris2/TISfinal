<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\SobreController;
use App\Http\Controllers\EmpresaController;
use App\Mail\NotificacionMailReceived;
use Illuminate\Support\Facades\Mail;

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

/* Rutas de los links--------------------------------------------------- */
// Route::get('/addEmpresa',function(){
//     return view('addEmpresa');
    
// })->name('addEmpresa');

// Route::get('/listEmpresas',function(){
//      return view('listEmp');
    
// })->name('listEmpresa');
// Route::get('/listEmpresas', App\Http\Controllers\CrearEmpresaController@index);
// Route::post('empresas', App\Http\Controllers\CrearEmpresaController@store);


Route::get('/addPropuesta',function(){
    return view('addPropuesta');
});

Route::get('/listaPropuesta',function(){
    return view('listaPropuesta');
});


/* Rutas de los usuarios--------------------------------------------------- */

Route::resource('/users', UserController::class);

Route::resource('/grupos', GrupoController::class);

/*---------------------------------------------------------------------*/
Auth::routes();

Route::resource('/empresas', App\Http\Controllers\EmpresaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*-------------------------Rutas nuevas vistas-------------------------*/


//Route::post('/subir','App\Http\Controllers\SobreBController@storeB')->name('subir');
//Route::post('/subir','App\Http\Controllers\SobreAController@storeA')->name('subir');

//Route::get('sobre_b_s','App\Http\Controllers\SobreBController@index');
//Route::get('sobre_a_s','App\Http\Controllers\SobreAController@index');

Route::post('/addPropuesta', [App\Http\Controllers\SobreController::class, 'store']);
Route::get('/listaPropuesta', [App\Http\Controllers\SobreController::class, 'index']);



/*-----------------------Ruta envio de correos---------------------------*/

Route::post('listaPropuesta', [App\Http\Controllers\MensajeController::class, 'store']);

Route::resource('/empresas',App\Http\Controllers\EmpresaController::class);
Route::resource('/convocatorias',App\Http\Controllers\ConvocatoriaController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

