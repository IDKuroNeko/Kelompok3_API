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


$router->get('/konfirmasis', 'KonfirmasiController@index');
$router->get('/konfirmasis/{id}', 'KonfirmasiController@show');
$router->post('/konfirmasis/create', 'KonfirmasiController@store');
$router->put('/konfirmasis/update/{id}', 'KonfirmasiController@update');
$router->delete('/konfirmasis/delete/{id}', 'KonfirmasiController@destroy');

$router->get('/stasiuns', 'StasiunController@index');
$router->get('/stasiuns/{id}', 'StasiunController@show');
$router->post('/stasiuns/create', 'StasiunController@store');
$router->post('/stasiuns/update/{id}', 'StasiunController@update');
$router->delete('/stasiuns/delete/{id}', 'StasiunController@destroy');

$router->get('/', function () use ($router) {
    return $router->app->version();
});

