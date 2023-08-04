<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    // public function index(Request $request)
    // {
    //     $apiKey = env('WEATHER_API');
    //     $city = 'New York'; // You can change this to the desired city

    //     $response = Http::get("http://api.weatherapi.com/v1/current.json?", [
    //         'key' => $apiKey,
    //         'q' => $city,
    //     ]);

    //     $weatherData = $response->json();

    //     return view('weather', compact('weatherData'));
    // }


    public function index()
    {
        return view('index');
    }

    public function getWeather(Request $request)
    {
        $apiKey = env('WEATHER_API');
        $city = $request->input('city');

        $response = Http::get("http://api.weatherapi.com/v1/current.json?key=$apiKey&q=$city");

        $data = $response->json();
        $location = $data['location']['name'];

        $temerature_c = $data['current']['temp_c'];
        $temerature_f = $data['current']['temp_f'];

        $condition = $data['current']['condition']['text'];

        $wind_mph = $data['current']['wind_mph'];
        $wind_kph = $data['current']['wind_kph'];

        $pressure_mb = $data['current']['pressure_mb'];
        $pressure_in = $data['current']['pressure_in'];

        $humidity = $data['current']['humidity'];
        $uv = $data['current']['uv'];

        return view('result', compact('city', 'location', 'temerature_c', 'temerature_f', 'condition', 'wind_mph', 'wind_kph', 'pressure_mb', 'pressure_in', 'humidity', 'uv'));
    }
}
