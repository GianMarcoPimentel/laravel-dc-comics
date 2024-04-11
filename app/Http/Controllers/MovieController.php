<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
