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

    <div class="info">
        <h3>Info : </h3>
        <p>Prezzo : {{$movie->price}}</p>
        <p>Serie : {{$movie->series}}</p>
        <p>Data di uscita : {{$movie->sale_date}}</p>
        <p>Tipologia : {{$movie->type}}</p>
    </div>
    <div class="collaborators">
        <h3>Collaboratori :</h3>
        <p>Artisti : {{$movie->artists}}</p>
        <p>Scrittori : {{$movie->writers}}</p>
    </div>
</div>
@endsection

