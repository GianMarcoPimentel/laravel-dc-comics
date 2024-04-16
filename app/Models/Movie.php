<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;

    //aggiungo la softDeletes
    use SoftDeletes;

    // inserisco la proprietà fillable() per automatitazzare il codice
    protected $fillable = [
        'title',
        'description',
        'thum',
        'price',
        'series',
        'sale_date',
        'type',
        'artists',
        'writers',
    ];
}
