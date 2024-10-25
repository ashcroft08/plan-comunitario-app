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

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/

$router->get('/', function () use ($router) {
    return file_get_contents(resource_path('views/dashboard.html'));
});

$router->get('/datos_generales_provincia', function () {
    return view('datos_generales_provincia'); 
});

$router->get('/datos_generales_habitantes', function () {
    return view('datos_generales_habitantes');
});

$router->get('/datos_generales_delegado', function () {
    return view('datos_generales_delegado');
});

$router->get('/datos_generales_responsables', function () {
    return view('datos_generales_responsables');
});

$router->get('/datos_generales_documentacion', function () {
    return view('datos_generales_documentacion');
});

$router->get('/amenazas', function () {
    return view('amenazas');
});

$router->get('/historico', function () {
    return view('historico');
});

$router->get('/identificacion_amenaza', function () {
    return view('identificacion_amenaza');
});

$router->get('/desc_vulnerabilidad', function () {
    return view('desc_vulnerabilidad');
});

$router->get('/mecanismo_alarma', function () {
    return view('mecanismo_alarma');
});