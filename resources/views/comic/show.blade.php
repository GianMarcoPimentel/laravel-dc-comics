@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h1>
        {{$movie->title}}
    </h1>
    <p>
        {{$movie->description}}
    </p>
    <img src="{{$movie->thumb}}" alt="">

    <h3>Info : </h3>
    <div class="info bg-warning ">
        <p>Prezzo : {{$movie->price}}</p>
        <p>Serie : {{$movie->series}}</p>
        <p>Data di uscita : {{$movie->sale_date}}</p>
        <p>Tipologia : {{$movie->type}}</p>
    </div>

    <h3>Collaboratori :</h3>
    <div class="collaborators">
        <p>Artisti : {{$movie->artists}}</p>
        <p>Scrittori : {{$movie->writers}}</p>
    </div>
</div>
<div class="container py-5">
    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary">Modifica</a>
{{--     <a href="{{route('pastas.edit', $pasta->id)}}" class="btn btn-warning">Modifica</a>
 --}}</div>
@endsection

