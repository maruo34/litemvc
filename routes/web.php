<?php

use Kernel\Router\Route;

return [
    Route::get('/', 'IndexController@index'),

    Route::get('/tasks', 'IndexController@tasks'),

    Route::get('/admin', 'AdminController@index')
];