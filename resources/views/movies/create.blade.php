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
  </div>
  <div class="form-group">
    <label>Movie Genre</label>
    <input name="genre" type="text" class="form-control" placeholder="Enter movie genre">
  </div>
  <div class="form-group">
    <label>Director</label>
    <input name="director" type="text" class="form-control" placeholder="Enter name of the movie director">
  </div>
  <div class="form-group">
    <label>Year of production</label>
    <input name="year" type="text" class="form-control" placeholder="Year of production">
  </div>
  <div class="form-group">
    <label>Storyline</label>
    <textarea name="storyline"class="form-control" placeholder="Enter storyline" rows="10" cols="80"></textarea>
  </div>
  <div class="form-group form-check">
    <input checked="true" value="1" name="published" type="checkbox" class="form-check-input">
    <label class="form-check-label">Publish this post?</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
