<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('auth.login');
});


//Route::resource('/Empleado','EmpleadoController');
//ruta de crear
Route::get('/empleado/create','EmpleadoController@create');
//ruta principal    
Route::get('/empleado/index','EmpleadoController@index');
//ruta de eliminar 
Route::get('/empleado/{id}', 'EmpleadoController@eliminar');
//ruta del almacenamiento
Route::POST('/empleado/store','EmpleadoController@store');
//ruta de editar
Route::get('/empleado/{id}/edit','EmpleadoController@editar');
//ruta de actualizar
Route::patch('/empleado/{id}/edit','EmpleadoController@actualizar');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
