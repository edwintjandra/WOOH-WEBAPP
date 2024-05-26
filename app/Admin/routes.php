<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\UserController; 
use App\Admin\Controllers\ArticleController; 
use App\Admin\Controllers\WaterPackagesController;
use App\Admin\Controllers\WaterMachinesController; 
use App\Admin\Controllers\OrderController; 

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('custom/users', UserController::class);
    $router->resource('custom/articles', ArticleController::class);
    $router->resource('custom/water-packages', WaterPackagesController::class);
    $router->resource('custom/water-machines', WaterMachinesController::class);
    $router->resource('custom/orders', OrderController::class);

});
