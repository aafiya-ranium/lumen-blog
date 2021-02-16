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

$router->get('api/users', 'Api\UsersController@index');
$router->get('api/user/{id}', 'Api\UsersController@show');
$router->post('api/user/store', 'Api\UsersController@store');
$router->put('api/user/update/{id}', 'Api\UsersController@update');
$router->delete('api/user/delete/{id}', 'Api\UsersController@destroy');
