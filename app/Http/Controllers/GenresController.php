<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($movieGenres)
    {
      $genres = Movie::getGenre($movieGenres);
      return view("movies.genre", ['genres' => $genres]);
    }
}
