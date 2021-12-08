<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\EstudianteController;

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

Route::get('inicio', function () {
    return view('inicio');
});

Route::get ('/estudiantes', 'EstudianteController@index')
    ->name('estudiante.index');

Route::get ('/estudiantes/{id}', 'EstudianteController@ver')
    ->name('estudiante.ver')
    ->where('id','[0-9]+');

route::get('/estudiantes/{id}/editar', 'EstudianteController@edit')
    ->name('estudiante.edit')
    ->where('id','[0-9]+');

route::put('/estudiantes/{id}/editar','EstudianteController@actualizar')
    ->name('estudiante.update')
    ->where('id','[0-9]+');

route::get('/estudiantes/crear','EstudianteController@create')
    ->name('estudiante.crear');
            
route::post('estudiantes/crear', 'EstudianteController@store') 
    ->name('estudiante.guardar');

route::delete('/estudiantes/{id}/eliminar','EstudianteController@destroy')
    ->name('estudiante.eliminar')
    ->where('id','[0-9]+');

 
