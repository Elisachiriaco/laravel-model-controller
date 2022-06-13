<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Model Controller</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Movies</h1>
    <div class="row no-wrap">
        @foreach ($movies as $movie)
        <div class="col-6">
        <ul>
                <li>Titolo: {{$movie->title}} </li>
                <li>Link: <a href="route('detail',$movie->id">{{$movie->title}}</a></li>
                <li>Titolo originale: {{$movie->original_title}}</li>
                <li>Nazionalità: {{$movie->nationality}}</li>
                <li>Uscito il: {{$movie->date}}</li>
                <li>Voto: {{$movie->vote}}</li>
        </ul>
        </div>
        @endforeach
    </div>
    </div>
</body>
</html>