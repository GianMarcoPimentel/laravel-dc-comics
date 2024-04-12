@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1>Modifica la pasta</h1>

    {{-- @dd($movie) --}}
    <form action="{{ route('movies.update', $movie->id )}}" method="POST">
        @csrf
        @method('PUT')


        <div class="mb-3">
          <label for="title" class="form-label">Nome del film</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$movie->title}}">
        </div>
        
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea type="text" class="form-control" id="description" name=" description">value="{{$movie->description}}"</textarea >
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="thumb">Immagine</label>
          <input type="text" class="form-control" id="thumb" name=" thumb" value="{{$movie->thumb}}">
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="price">Prezzo</label>
          <input type="text" class="form-control" id="price" name=" price" value="{{$movie->price}}">
        </div>
          
        <div class="mb-3 ">
          <label class="form-label" for="series">Serie</label>
          <input type="text" class="form-control" id="series" name=" series" value="{{$movie->series}}">
        </div>
  
        <div class="mb-3 ">
          <label class="form-label" for="sale_date">Uscita</label>
          <input type="text" class="form-control" id="sale_date" name=" sale_date" value="{{$movie->sale_date}}">
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="type">Tipologia</label>
          <input type="text" class="form-control" id="type" name=" type" value="{{$movie->type}}">
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="artists">Artisti</label>
          <input artists="text" class="form-control" id="type" name=" artists" value="{{$movie->artists}}">
        </div>

        <div class="mb-3 ">
          <label class="form-check-label" for="writers">Scrittori</label>
          <input type="text" class="form-control" id="artists" name=" writers" value="{{$movie->writers}}">
        </div>




        <button type="submit" class="btn btn-primary">Salva</button>
      </form>




</div>
@endsection