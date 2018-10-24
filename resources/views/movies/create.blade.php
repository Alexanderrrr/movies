@extends('movies.master')

@section('title')

  Create movie

@endsection

@section('content')
<style media="screen">
  label{
    font-weight: bold;
  }
</style>
<form method="POST" action="/movies">

  {{ csrf_field() }}

  <div class="form-group">
    <label>Movie Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter movie title">
    @include('movies.partials.error_message', ['field' => 'title']) <!-- gadjamo name od inputa -->

  </div>
  <div class="form-group">
    <label>Movie Genre</label>
    <input name="genre" type="text" class="form-control" placeholder="Enter movie genre">
    @include('movies.partials.error_message', ['field' => 'genre']) <!-- gadjamo name od inputa -->

  </div>
  <div class="form-group">
    <label>Director</label>
    <input name="director" type="text" class="form-control" placeholder="Enter name of the movie director">
    @include('movies.partials.error_message', ['field' => 'director']) <!-- gadjamo name od inputa -->

  </div>
  <div class="form-group">
    <label>Year of production</label>
    <input name="year" type="text" class="form-control" placeholder="Year of production">
    @include('movies.partials.error_message', ['field' => 'year']) <!-- gadjamo name od inputa -->

  </div>
  <div class="form-group">
    <label>Storyline</label>
    <textarea name="storyline"class="form-control" placeholder="Enter storyline" rows="10" cols="80"></textarea>
    @include('movies.partials.error_message', ['field' => 'storyline']) <!-- gadjamo name od inputa -->

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
