<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = config("comics");

        $this->command->info(print_r($movies));

        /* foreach ($movies as $movie) {

        $newMovie = new Movie();

        $newMovie->title = $movie['title'];
        $newMovie->description = $movie['description'];
        $newMovie->thumb = $movie['thumb'];
        $newMovie->price = $movie['price'];
        $newMovie->series = $movie['series'];
        $newMovie->sale_date = $movie['sale_date'];
        $newMovie->type = $movie['type'];
        $newMovie->artists = $movie['artists'];
        $newMovie->writers = $movie['writers'];
        
        $newMovie->save();

        } */

    }
}
