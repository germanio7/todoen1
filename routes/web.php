<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/radios', function () {
    return Inertia::render('Radios');
});

Route::get('/info', function () {
    $path = base_path('counter.json');
    $counter = file_get_contents($path);
    $elements = json_decode($counter, true);
    $total = $elements['total'];
    return Inertia::render('Welcome', [
        'visitas' => $total
    ]);
});

Route::get('/noticias', function () {
    return Inertia::render('News');
});

// Route::resource('/users', 'UserController');
