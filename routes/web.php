<?php

use Illuminate\Support\Facades\Route;

// Definindo que não terá componentes visuais
Route::get('/', function () {
    abort(404);
});
