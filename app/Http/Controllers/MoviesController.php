<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
      $movies = Movie::orderBy('created_at', 'DESC')->get();
      return view('movies.index', ['movies' => $movies]);
    }

    public function show($movieId)
    {
      $movie = Movie::with('comments')->find($movieId); //da ne bude lazy loading
      return view('movies.show', ['movie' => $movie]);
    }

    public function create()
    {
      //$movie = Movie::findOrFail($movieId);
      return view('movies.create');
    }

    public function store()
    {
      $this->validate(
            request(),
       Movie::VALIDATION_RULES
        );

      Movie::create(request()->all());
      return redirect('/');

    }


}
