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
    $apiKey = config('services.here_weather.api_key');
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=" . $apiKey . "&product=observation&name=" . $request->city;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/auxiliar', function (Request $request) {
    $apiKey = config('services.weatherstack.api_key');
    $client = new Client();
    $url = "http://api.weatherstack.com/current?access_key=" . $apiKey . "&query=" . $request->city . "&units=m";

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/prueba', function (Request $request) {
    $apiKey = config('services.google_search.api_key');
    $client = new Client();
    $url = "https://www.googleapis.com/customsearch/v1?key=" . $apiKey . "&cx=6e977d0b11e796d7b&q=boca juniors";

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/scores', function () {
    $apiKey = config('services.football_data.api_key');
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
    $apiKey = config('services.football_data.api_key');
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
    $apiKey = config('services.here_weather.api_key');
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=" . $apiKey . "&product=observation&name=" . $request->city;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/seven-days', function (Request $request) {
    $apiKey = config('services.here_weather.api_key');
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=" . $apiKey . "&product=forecast_7days_simple&latitude=" . $request->latitude . "&longitude=" . $request->longitude;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/news', function () {
    $apiKey = config('services.newsapi.api_key');
    $client = new Client();
    $url = "https://newsapi.org/v2/top-headlines?country=ar&apiKey=" . $apiKey;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/newsCategory', function (Request $request) {
    $apiKey = config('services.newsapi.api_key');
    $client = new Client();
    $url = "https://newsapi.org/v2/top-headlines?country=ar&category=" . $request->category . "&apiKey=" . $apiKey;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});
