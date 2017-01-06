<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get(
    'usuarios',
    [
        'uses' => 'UsuariosController@mostrarUsuarios'
    ]
);
Route::get(
    'usuarios/nuevo',
    [
        'uses' => 'UsuariosController@nuevoUsuario'
    ]
);
Route::post(
    'usuarios/crear',
    [
        'uses' => 'UsuariosController@crearUsuario'
    ]
);
Route::get(
    'usuarios/{id}',
    [
        'uses' => 'UsuariosController@verUsuario'
    ]
);
Route::get(
    'usuarios/modificar/{id}',
    [
        'uses' => 'UsuariosController@modificarUsuario'
    ]
);
Route::post(
    'usuarios/modificar/{id}',
    [
        'uses' => 'UsuariosController@actualizarUsuario'
    ]
);

Route::controller("perfiles", "PerfilesController");