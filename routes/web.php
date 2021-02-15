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

$router->get('users', 'Api\UsersController@index');
$router->get('user/{id}', 'Api\UsersController@show');
$router->post('user/store', 'Api\UsersController@store');
$router->put('user/update/{id}', 'Api\UsersController@update');
$router->delete('user/delete/{id}', 'Api\UsersController@destroy');
