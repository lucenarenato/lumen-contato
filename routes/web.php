<?php


/*$router->get('/', function () use ($router) {
    //return $router->app->version();
    return '<h1>Minha Primeira rota com Lumen</h1>';
});*/

$router->get('/contato', 'ContatoController@contato');
$router->get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
$router->get('/2', ['as' => '2.hello', 'uses' => 'IndexController@index2']);

//Rotas curso agenda de lumen
$router->get('/curso', ['as' => 'curso', 'uses' => 'CursoController@lista']);
$router->get('/curso{letra}', ['as' => 'curso.letra', 'uses' => 'CursoController@lista']);


//$router->get('/', 'IndexController@index');