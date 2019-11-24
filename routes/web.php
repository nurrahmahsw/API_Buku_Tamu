<?php

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

$router->get('/bukutamu', 'DataBukuTamuController@index');
$router->get('/bukutamu/{id}', 'DataBukuTamuController@tampil');
$router->post('/bukutamu', 'DataBukuTamuController@simpan');
$router->put('/bukutamu/{id}', 'DataBukuTamuController@ubah');
$router->delete('/bukutamu/{id}', 'DataBukuTamuController@hapus');




