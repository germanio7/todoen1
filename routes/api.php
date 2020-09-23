<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/search-city', function (Request $request) {
    $apiKey = '6Q0ai7EkF7CuVBQESFfM-R_gmYRAwpXTE0OrYVgLl5o';
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=" . $apiKey . "&product=observation&name=" . $request->city;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/auxiliar', function (Request $request) {
    $apiKey = 'ebb6cd107526bf1b0f4a849e5d81a5f2';
    $client = new Client();
    $url = "http://api.weatherstack.com/current?access_key=" . $apiKey . "&query=" . $request->city . "&units=m";

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/prueba', function (Request $request) {
    $apiKey = 'AIzaSyAc8_SvBpKsLlOrtqTOg5AN1Zbdlc_9Ab4';
    $client = new Client();
    $url = "https://www.googleapis.com/customsearch/v1?key=" . $apiKey . "&cx=6e977d0b11e796d7b&q=boca juniors";

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/scores', function () {
    $apiKey = 'feda2374db304bc6a65d153009f4f355';
    $client = new Client();
    // $url = 'https://api.football-data.org/v2/competitions';
    $url = 'http://api.football-data.org/v2/competitions/2021/matches?matchday=1';
    $headers = [
        'headers' => [
            'X-Auth-Token' => $apiKey
        ]
    ];

    $response = $client->get($url, $headers);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/teams/{id}', function ($id) {
    $apiKey = 'feda2374db304bc6a65d153009f4f355';
    $client = new Client();
    $url = 'http://api.football-data.org/v2/teams/' . $id;
    $headers = [
        'headers' => [
            'X-Auth-Token' => $apiKey
        ]
    ];

    $response = $client->get($url, $headers);

    $aux = collect(json_decode((string) $response->getBody(), true));
    return $aux['crestUrl'];
});

Route::post('/default-city', function (Request $request) {
    $apiKey = '6Q0ai7EkF7CuVBQESFfM-R_gmYRAwpXTE0OrYVgLl5o';
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=" . $apiKey . "&product=observation&name=" . $request->city;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/seven-days', function (Request $request) {
    $apiKey = '6Q0ai7EkF7CuVBQESFfM-R_gmYRAwpXTE0OrYVgLl5o';
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=" . $apiKey . "&product=forecast_7days_simple&latitude=" . $request->latitude . "&longitude=" . $request->longitude;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/news', function () {
    $apiKey = 'cb8bd5bfdb31449eba1b6c5870b5fe84';
    $client = new Client();
    $url = "https://newsapi.org/v2/top-headlines?country=ar&apiKey=" . $apiKey;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/newsCategory', function (Request $request) {
    $apiKey = 'cb8bd5bfdb31449eba1b6c5870b5fe84';
    $client = new Client();
    $url = "https://newsapi.org/v2/top-headlines?country=ar&category=" . $request->category . "&apiKey=" . $apiKey;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});
