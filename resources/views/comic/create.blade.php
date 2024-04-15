@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Aggiungi un Film</h1>


{{--     scrivo il nome della rotta come action e so dal terminale che il metodo della store è POST --}}    
    <form action="{{ route('movies.store')}}" method="POST">
        @csrf
      {{-- per salvare tutto ciò che ho già scritto di corretto devo usare il metodo old() --}}

        <div class="mb-3">
          <label for="title" class="form-label">Nome del film</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea type="text" class="form-control" id="description" name=" description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="thumb">Immagine</label>
          <input type="text" class="form-control" id="thumb" name=" thumb" value="{{ old('thumb') }}">
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="price">Prezzo</label>
          <input type="text" class="form-control" id="price" name=" price" value="{{ old('price') }}">
        </div>
          
        <div class="mb-3 ">
          <label class="form-label" for="series">Serie</label>
          <input type="text" class="form-control" id="series" name=" series" value="{{ old('series') }}">
        </div>
  
        <div class="mb-3 ">
          <label class="form-label" for="sale_date">Uscita</label>
          <input type="text" class="form-control" id="sale_date" name=" sale_date" value="{{ old('sale_date') }}">
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="type">Tipologia</label>
          <input type="text" class="form-control" id="type" name=" type" value="{{ old('type') }}">
        </div>

        <div class="mb-3 ">
          <label class="form-label" for="artists">Artisti</label>
          <input artists="text" class="form-control" id="artists" name=" artists" value="{{ old('artists') }}">
        </div>

        <div class="mb-3 ">
          <label class="form-check-label" for="writers">Scrittori</label>
          <input type="text" class="form-control" id="writers" name=" writers" value="{{ old('writers') }}">
        </div>

      
        <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>
</div>
@endsection