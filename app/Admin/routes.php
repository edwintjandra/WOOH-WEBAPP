<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\UserController; 
use App\Admin\Controllers\ArticleController; 


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

});
