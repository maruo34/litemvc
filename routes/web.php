<?php

use Kernel\Router\Route;

return [
    Route::get('/', function() {
        return (new Controllers\IndexController)->index();
    }),
    
    Route::get('/', function() {
        return (new Controllers\Index)->foo();
    })
];