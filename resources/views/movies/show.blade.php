@extends('movies.master')

@section('title')
  Single Movie
@endsection

@section('content')
      <ul>
        <li>{{ $movie->director }}</li>
      </ul>
@endsection
