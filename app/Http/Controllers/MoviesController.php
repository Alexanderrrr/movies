<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
      $movies = Movie::all();
      return view('movies.index', ['movies' => $movies]);
    }

    public function show($movieId)
    {
      $movie = Movie::findOrFail($movieId);
      return view('movies.show', ['movie' => $movie]);
    }

    public function create()
    {
      //$movie = Movie::findOrFail($movieId);
      return view('movies.create');
    }
}
