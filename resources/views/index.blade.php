@extends('layout.main')

@section('content')
    <h1>Weather App</h1>
    <form action="/weather" method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label">Enter city:</label>
            <input type="text" class="form-control" name="city">
        </div>

        <button class="btn btn-primary" type="submit">Get Weather</button>
    </form>
@endsection
