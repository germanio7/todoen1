<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/weather', function () {
    return Inertia::render('Weather');
});

Route::get('/scores', function () {
    return Inertia::render('FootballData');
});

Route::get('/youtube', function () {
    return Inertia::render('Youtube');
});

Route::get('/radios', function () {
    return Inertia::render('Radios');
});

Route::get('/info', function () {
    $total = DB::table('visits')->count();

    return Inertia::render('Info', [
        'visitas' => $total
    ]);
});

Route::get('/noticias', function () {
    return Inertia::render('News');
});

Route::get('/juegos', function () {
    return Inertia::render('Games');
});

Route::get('/test', function () {
    return Inertia::render('Scores');
});

// Route::resource('/users', 'UserController');
