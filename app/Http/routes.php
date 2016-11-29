<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('page.index');
});

Route::get('/pages/{name}', function ($name) {
    return view('page.' . $name);
});

use Crew\Unsplash as Unsplash;

Route::get('unsplash', function () {
    Unsplash\HttpClient::init([
        'applicationId' => 'ff1c6c90eec52a82c30dbadbcb0acdc04e403d8a749e16a03909f6978b31d8a9',
        'secret' => 'e89a4910547363b6693a49f17611242b51c34a9ac5bebaa9e95c1db43f62140a',
    ]);
    $scopes = ['public', 'write_user'];
    Unsplash\HttpClient::$connection->getConnectionUrl($scopes);
//    $cats = Unsplash\Photo::all();
//    dump($cats->getArrayCopy());
    $response = (new Unsplash\HttpClient())->send("get", ['/search/photos/?query=people']);
    $body = collect(json_decode($response->getBody(), true));

    $results = collect($body['results']);

    dump($results);

    $img = $results->map(function ($item, $key) {
        return [
            "username" => $item['user']['first_name'].' '.$item['user']['last_name'],
            "id" => $item['user']['id'],
            "raw" => $item['urls']['raw'],
            "full" => $item['urls']['full'],
            "regular" => $item['urls']['regular'],
            "small" => $item['urls']['small'],
            "thumb" => $item['urls']['thumb']
        ];
    });


    return dump($img);
});

