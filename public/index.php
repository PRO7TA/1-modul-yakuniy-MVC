<?php

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../config/database.php';
require_once '../app/Controllers/PostController.php';
session_start();

// Routingni sozlash
$router = new Router();

if (isset($_SESSION['action']) && $_SESSION['action'] === true) {
    $router->get('/posts/index', 'PostController@index');
    $router->get('/posts/create', 'PostController@create');
    $router->post('/posts/store', 'PostController@store');
    $router->get('/posts/show', 'PostController@show');
    $router->get('/posts/edit', 'PostController@edit');
    $router->post('/posts/update', 'PostController@update');
    $router->get('/posts/delete', 'PostController@destroy');

    $router->get('/users/index', 'UserController@index');
    $router->get('/users/show', 'UserController@show');
}

$router->get('/', 'UserController@create');
$router->get('/login', 'UserController@loginPage');
$router->post('/login/store', 'UserController@login');
$router->post('/users/store', 'UserController@store');
$router->get('/logout', 'UserController@logout');

$router->dispatch();
