<?php

$router->get('/', 'Home@index');
$router->get('/post/{slug}', 'Post@show');
$router->get('/login', 'Login@index');
$router->get('/posts', 'Posts@index');
$router->post('/login', 'Login@store');
$router->get('/logout', 'Login@destroy');
$router->get('/protect', ['middleware' => 'loggedIn', 'uses' => 'Protect@index']);
$router->get('/language/{language}', 'Language@index');
