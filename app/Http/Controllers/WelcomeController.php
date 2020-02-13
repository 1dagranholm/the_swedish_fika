<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class WelcomeController extends Controller {

    public function home() {

        $client = new Client();

        $response = $client->request('GET', 'api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => 'stockholm',
                'appid' => '61dab6fb7df22a0d9bb49a92808e8af1',
                'units' => 'metric',
                'lang' => 'se'
            ]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return view('welcome', [
            'weather' => json_decode($body, true)
        ]);
    }
}

