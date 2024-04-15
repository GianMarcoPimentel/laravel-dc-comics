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
          <input 
          type="text" 
          class="form-control
          @error('title')
          is-invalid 
          @enderror" 
          id="title" 
          name="title" 
          value="{{ old('title') }}">
        </div>
        @error('title')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror

        
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name=" description">{{ old('description') }}</textarea>
        </div>
        @error('description')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror

        
        <div class="mb-3 ">
          <label class="form-label" for="thumb">Immagine</label>
          <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name=" thumb" value="{{ old('thumb') }}">
        </div>
        @error('thumb')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror


        <div class="mb-3 ">
          <label class="form-label" for="price">Prezzo</label>
          <input type="text" class="form-control @error('price') is-invalid @enderror " id="price" name=" price" value="{{ old('price') }}">
        </div>
        @error('price')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror

          
        <div class="mb-3 ">
          <label class="form-label" for="series">Serie</label>
          <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name=" series" value="{{ old('series') }}">
        </div>
        @error('series')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror

  
        <div class="mb-3 ">
          <label class="form-label" for="sale_date">Uscita</label>
          <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name=" sale_date" value="{{ old('sale_date') }}">
        </div>
        @error('sale_date')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror


        <div class="mb-3 ">
          <label class="form-label" for="type">Tipologia</label>
          <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name=" type" value="{{ old('type') }}">
        </div>
        @error('type')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror


        <div class="mb-3 ">
          <label class="form-label" for="artists">Artisti</label>
          <input artists="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name=" artists" value="{{ old('artists') }}">
        </div>
        @error('artists')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror


        <div class="mb-3 ">
          <label class="form-check-label" for="writers">Scrittori</label>
          <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name=" writers" value="{{ old('writers') }}">
        </div>
        @error('writers')
        <div class="alert alert-danger">
          {{$message}}
        </div>
        @enderror


        {{-- @dump($errors) --}}

        {{-- mostro l'eventuale errore in pagina --}}
     {{--  @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>
              {{ $error }}
            </li>
            @endforeach
          </ul>
        </div>
      @endif  --}}
        <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>
</div>
@endsection