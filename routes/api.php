<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/youtube', function (Request $request) {
    if ($request->get('link')) {

        $vid = substr($request->get('link'), -11);

        parse_str(file_get_contents("http://youtube.com/get_video_info?video_id=" . $vid), $info);

        if (key_exists('player_response', $info)) {
            $aux = $info['player_response'];

            $arr = json_decode($aux, true);

            $nombre = $arr['videoDetails']['title'];

            if (key_exists('streamingData', $arr)) {
                $formats = $arr['streamingData']['adaptiveFormats'];
                foreach ($formats as $forma) {
                    if ($forma['itag'] == 140) {
                        if (key_exists('signatureCipher', $forma)) {
                            parse_str($forma['signatureCipher'], $aux);
                            header("Content-Type: application/force-download");
                            header("Content-Disposition: attachment");
                            readfile($aux['url']);
                        } else {
                            header("Content-Type: application/force-download");
                            header("Content-Disposition: attachment");
                            readfile($forma['url']);
                        }
                    }
                }
            }
        }
    }
});

Route::post('/auxiliar', function (Request $request) {
    $apiKey = config('services.weatherstack.api_key');
    $client = new Client();
    $url = "http://api.weatherstack.com/current?access_key=" . $apiKey . "&query=" . $request->city . "&units=m";

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
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

Route::get('/competition/{id}', function ($id) {
    $client = new Client();
    $url = 'https://www.thesportsdb.com/api/v1/json/1/lookupleague.php?id=' . $id;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::post('/table-competition', function (Request $request) {
    $client = new Client();
    $url = 'https://www.thesportsdb.com/api/v1/json/1/lookuptable.php?l=' . $request->id . '&s=' . $request->season;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/last-events/{id}', function ($id) {
    $client = new Client();
    $url = 'https://www.thesportsdb.com/api/v1/json/1/eventspastleague.php?id=' . $id;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/next-events/{id}', function ($id) {
    $client = new Client();
    $url = 'https://www.thesportsdb.com/api/v1/json/1/eventsnextleague.php?id=' . $id;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/event-results/{id}', function ($id) {
    $client = new Client();
    $url = 'https://www.thesportsdb.com/api/v1/json/1/eventresults.php?id=' . $id;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/dolar-blue', function () {
    $client = new Client();
    $url = 'https://api-dolar-argentina.herokuapp.com/api/dolarblue';

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/dolar-oficial', function () {
    $client = new Client();
    $url = 'https://api-dolar-argentina.herokuapp.com/api/dolaroficial';

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});

// Football Data
Route::get('/scores/{id}', function ($id) {
    $apiKey = config('services.football_data.api_key');
    $client = new Client();
    $url = 'http://api.football-data.org/v2/competitions/' . $id;

    $headers = [
        'headers' => [
            'X-Auth-Token' => $apiKey
        ]
    ];

    $response = $client->get($url, $headers);

    $data = collect(json_decode((string) $response->getBody(), true));
    $currentMatchday = $data['currentSeason']['currentMatchday'];

    $aux = '/matches?matchday=' . $currentMatchday;

    $response = $client->get($url . $aux, $headers);

    return $data = collect(json_decode((string) $response->getBody(), true));
});

Route::post('/partidos', function (Request $request) {
    $apiKey = config('services.football_data.api_key');
    $client = new Client();
    $url = 'http://api.football-data.org/v2/competitions/' . $request->id . '/matches?matchday=' . $request->round;
    $headers = [
        'headers' => [
            'X-Auth-Token' => $apiKey
        ]
    ];

    $response = $client->get($url, $headers);

    return collect(json_decode((string) $response->getBody(), true));
});

Route::get('/standings/{id}', function ($id) {
    $apiKey = config('services.football_data.api_key');
    $client = new Client();
    $url = 'http://api.football-data.org/v2/competitions/' . $id . '/standings?standingType=TOTAL';
    $headers = [
        'headers' => [
            'X-Auth-Token' => $apiKey
        ]
    ];

    $response = $client->get($url, $headers);

    $aux = collect(json_decode((string) $response->getBody(), true));
    return $aux['standings'];
});

Route::get('/scorers/{id}', function ($id) {
    $apiKey = config('services.football_data.api_key');
    $client = new Client();
    $url = 'http://api.football-data.org/v2/competitions/' . $id . '/scorers';
    $headers = [
        'headers' => [
            'X-Auth-Token' => $apiKey
        ]
    ];

    $response = $client->get($url, $headers);

    $aux = collect(json_decode((string) $response->getBody(), true));
    return $aux['scorers'];
});

Route::get('/unsplash', function () {
    // $accessKey = config('services.newsapi.api_key');
    $accessKey = 'xIm3ODEu_EO9N-GcqIwguHE98k6GuVQtizyPBHpifgQ';
    $client = new Client();
    $url = "https://api.unsplash.com/photos/random?client_id=" . $accessKey;

    $response = $client->get($url);

    return collect(json_decode((string) $response->getBody(), true));
});
