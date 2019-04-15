<?php

use Kernel\Router\Route;

return [
    Route::get('/api', function() {
        return (new Controllers\IndexController)->index();
    })
];