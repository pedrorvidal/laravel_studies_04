<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::view('/','home');

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexão OK " . DB::connection()->getDatabaseName();
    } catch (\Throwable $th) {
        throw $th;
    }
});
