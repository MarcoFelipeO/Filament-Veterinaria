<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


use Illuminate\Support\Facades\DB;

Route::get('/mysql', function () {
    try {
        DB::connection('mysql')->getPdo();
        return 'Conexión Mysql exitosa';
    } catch (\Exception $e) {
        return 'Error al conectar con MySql: ' . $e->getMessage();
    }
});
