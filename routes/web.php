<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'auth'], function () use ($router) {
	// http://localhost:8000/auth/me
    $router->post('login', 'AuthController@login');
	$router->post('logout', 'AuthController@logout');
	$router->post('refresh', 'AuthController@refresh');
	$router->post('me', 'AuthController@me');
});


$router->get('/user/{id}', 'UserController@show');
$router->get('/user/public/{id}', 'UserController@public_show');