<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $movies = Movie::all();
        // dd($movie);

        return view("comic.index",compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $movie = $request->all('');
        dd($movie); */

        // devo validare la mia richiesta
        //fare i controlli opportuni per far si che i dati siano correttamente insieriti nel db
        // devo fare i controlli sulla request

        // con validate() controllo le regole scelte da noi per i vari campi che riceviamo nel form
        //se le validazione non vanno a buon fine laravel in automatico fa tornare l'utente indietro
        // e fornirà alla pagina precedente le indicazioni sull'errore)
        
        //richiamo la funzione validation() con tutte le request 
        $this->validation($request->all());
        $newMovie = new Movie();

        $newMovie->title = $request->title;
        $newMovie->description = $request->description;
        $newMovie->thumb = $request->thumb;
        $newMovie->price = $request->price;
        $newMovie->series = $request->series;
        $newMovie->sale_date = $request->sale_date;
        $newMovie->type = $request->type;
        $newMovie->artists = $request->artists;
        $newMovie->writers = $request->writers;
        
        $newMovie->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //utilizzo il metofo ->first() per ottenere direttamente un oggetto di tipo Movie
        //$movie = Movie::where('id', $id)->first();
        /* $movie = Movie::find($id); */
        //dd($movie);
        return view("comic.show",compact("movie"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('comic.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        // modifico la function update() in MovieController
        // per poi reindirizzarla nela rout list di comic.show 
        // e averla in pagina
       /*  $movie = new Movie();

 */

        //richiamo la funzione validation() con tutte le request 
        $this->validation($request->all());

        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->thumb = $request->thumb;
        $movie->price = $request->price;
        $movie->series = $request->series;
        $movie->sale_date = $request->sale_date;
        $movie->type = $request->type;
        $movie->artists = $request->artists;
        $movie->writers = $request->writers;
        
        $movie->save();

        return redirect()->route('movies.index', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //devo dire di cancellare il movie scelto
        $movie->delete();

        //devo ritornare alla pagina iniziale
        return redirect()->route('movies.index');
    }

    
    //creo una funzioan privata per i controlli di validazione 
    //e la comunizaizone dei messaggi di errore nella pagina create.blade.php
    //poi richiameremo i metodi nello store e nell'update

    private function validation($data){
        //introduco la variabile validator
        $validator = Validator::make($data, [
            'title'=> 'required|max:255',
            'description'=> 'nullable|max:1500',
            'thum'=>'nullable|max:1500',
            'price'=>'required|max:7',
            'series'=>'required|max:255',
            'type'=>'required|MAX:100',
            'artists'=>'required|MAX:2000',
            'writers'=>'required|MAX:2000',

        ])->validate();
    }
   
}
