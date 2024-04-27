<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    // $router->get('/', 'HomeController@index');
    $router->resource('/', ConsultaController::class);
    $router->resource('pacientes', PacienteController::class);
    $router->resource('prontuarios', ProntuarioController::class);
    $router->resource('medicos', MedicoController::class);
    $router->resource('consultas', ConsultaController::class);

});
