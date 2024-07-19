<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mantenedor', function () {
    return view('MantedorView');
});

Route::get('/mantenedor/{_id}', function ($_id) {
    return "mantedor del id buscado: {$_id}";
    // return view('MantedorView');
});
