<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// Ruta para mostrar los usuarios->todos.
$router->get('/usuarios', 'UsuarioController@listarUsuarios');

// Ruta para mostrar un usuario por ID.
$router->get('/usuarios/{id}', 'UsuarioController@listarUsuario');

// Ruta para registrar un usuario->DB.
$router->post('/usuarios/registro', 'UsuarioController@guardarUsuario');

// Ruta para modificar datos de un usuario.
$router->put('/usuarios/actualizar/{id}', 'UsuarioController@alterarUsuario');

// Ruta para eliminar un usuario por ID.
$router->delete('/usuarios/eliminar/{id}', 'UsuarioController@eliminarUsuario');
