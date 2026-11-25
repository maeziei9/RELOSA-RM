<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Rezza Mae D. Relosa';
    $section = 'BSCS-2';
    return view('about', compact('name', 'section'));
});
