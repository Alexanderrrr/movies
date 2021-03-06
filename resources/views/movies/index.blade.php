@extends('movies.master')

@section('title')
  All Movies
@endsection

@section('content')
  <h1>All Movies</h1>
  <ul>

      @foreach($movies as $movie)

          <li><a href="/movies/show/{{ $movie->id }}">{{ $movie->title }}</a></li>
          <br/>
          <li>{{ $movie->storyline }}</li>
          <hr/>

      @endforeach
  </ul>

@endsection
@section('sidebar')
<aside class="col-md-4 blog-sidebar">

     @include('movies.partials.sidebar')

</aside><!-- /.blog-sidebar -->
@endsection
