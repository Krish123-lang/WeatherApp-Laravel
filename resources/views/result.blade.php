@extends('layout.main')

<style>
    .center {
        margin: auto;
        width: 50%;
        /* border: 3px solid green; */
        padding: 10px;
    }
</style>

@section('content')
    <div class="center card">

        <a href="/" class="btn btn-warning m-2">Back</a>

        <div class="text-success">
            <hr>
        </div>

        <h1>Weather Result</h1>
        <h5>City: {{ $city }}</h5>
        <h5>Location: {{ $location }} </h5>
        <h5>Temperature: {{ $temerature_c }} ℃/ {{ $temerature_f }} ℉ </h5>
        <h5>Condition: {{ $condition }} </h5>
        <h5>Wind speed: {{ $wind_mph }} mph/{{ $wind_kph }} kph </h5>
        <h5>Pressure: {{ $pressure_mb }} mb/{{ $pressure_in }} in</h5>
        <h5>Humidity: {{ $humidity }} </h5>
        <h5>UV: {{ $uv }} </h5>

    </div>
@endsection('content')
