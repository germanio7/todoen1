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
    return Inertia::render('Radios');
});

Route::get('/weather', function () {
    return Inertia::render('Weather');
});

// Route::get('/test', function () {
//     return Inertia::render('test');
// });

Route::get('/radios', function () {
    return Inertia::render('Radios');
});

Route::get('/spotify', function () {
    return Inertia::render('Spotify');
});

Route::get('/info', function () {
    $total = DB::table('visits')->count();

    return Inertia::render('Welcome', [
        'visitas' => $total
    ]);
});

Route::get('/noticias', function () {
    return Inertia::render('News');
});

Route::get('/juegos', function () {
    return Inertia::render('Games');
});

// Route::resource('/users', 'UserController');
