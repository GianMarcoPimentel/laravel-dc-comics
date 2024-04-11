@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Lista Film : </h1>
        {{-- @dump($movies) --}}

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome del Film</th>
                <th scope="col"></th>
                
              </tr>
            </thead>
            <tbody>

                @foreach ($movies as $movie)
                    
                    <tr>
    
                    <td>{{$movie->title}}</td>
                    <td><a href="{{ route('comic.show', $movie->id )}}">Visualizza film</a></td>
                    
                    </tr>

                @endforeach
    
            </tbody>
          </table>


    </div>
@endsection