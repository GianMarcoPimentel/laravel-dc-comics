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

    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Elimina
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler eliminare questo comic?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Torna </button>
          
          <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
            @csrf
            @method("DELETE")
           {{--  <button type="button" class="btn btn-danger">Elimina<button> --}}
            <input type="submit" class="btn btn-danger" value="Elimina">
         </form>
        </div>
      </div>
    </div>
  </div>
   
    
    
    

    
</div>
@endsection

