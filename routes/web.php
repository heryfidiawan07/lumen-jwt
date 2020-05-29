<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});


// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });

$router->post('login', 'AuthController@login');
$router->post('logout', 'AuthController@logout');
$router->post('refresh', 'AuthController@refresh');
$router->post('me', 'AuthController@me');

use \Illuminate\Http\Request;
$router->get('/token', function (Request $request) {
    $token = app('auth')->attempt($request->only('email', 'password'));
 
    return response()->json(compact('token'));
});