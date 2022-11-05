<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index'); // Rota index

$router->get('/novo', 'UsuariosController@create'); 
$router->post('/novo', 'UsuariosController@createAction');// rota criaçao


$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');// rota edição

$router->get('/usuario/{id}/excluir', 'UsuariosController@delete');