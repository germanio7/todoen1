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
    $apiKey = 'aZ8yVZMqrBUavs5QX7Bqfax4FY8JdmETwgJTHey9DCs';
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=".$apiKey."&product=observation&name=".$request->city;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/default-city', function (Request $request) {
    $apiKey = 'aZ8yVZMqrBUavs5QX7Bqfax4FY8JdmETwgJTHey9DCs';
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=".$apiKey."&product=observation&name=".$request->city;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/seven-days', function (Request $request) {
    $apiKey = 'aZ8yVZMqrBUavs5QX7Bqfax4FY8JdmETwgJTHey9DCs';
    $client = new Client();
    $url = "https://weather.ls.hereapi.com/weather/1.0/report.json?language=es-ES&apiKey=".$apiKey."&product=forecast_7days_simple&latitude=".$request->latitude."&longitude=".$request->longitude;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/news', function () {
    $apiKey = 'cb8bd5bfdb31449eba1b6c5870b5fe84';
    $client = new Client();
    $url = "https://newsapi.org/v2/top-headlines?country=ar&apiKey=".$apiKey;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/newsCategory', function (Request $request) {
    $apiKey = 'cb8bd5bfdb31449eba1b6c5870b5fe84';
    $client = new Client();
    $url = "https://newsapi.org/v2/top-headlines?country=ar&category=".$request->category."&apiKey=".$apiKey;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});
