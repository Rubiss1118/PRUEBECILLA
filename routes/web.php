<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Las rutas de usuarios ahora están en routes/api.php
// Accesibles en: /api/users

