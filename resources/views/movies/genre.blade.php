@extends('movies.master')

@section('title')
  All Movies
@endsection

@section('content')
  <h1>All Movies</h1>
  <ul>

      @foreach($genres as $gen)

          <li>{{ $gen->title }}</li>
          <hr/>

      @endforeach
  </ul>
  <aside class="col-md-4 blog-sidebar">

       @include('movies.partials.sidebar')

  </aside><!-- /.blog-sidebar -->
@endsection
