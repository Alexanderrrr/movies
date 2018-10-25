@extends('movies.master')

@section('title')
  Single Movie
@endsection

@section('content')
      <ul>
        <li>{{ $movie->title }}</li>
        <li><a href="genres/{{ $movie->genre }}">{{ $movie->genre }}</a></li>
        <li>{{ $movie->director }}</li>
        <li>{{ $movie->year }}</li>
        <li>{{ $movie->storyline }}</li>
        <hr/>
<ul>
        @foreach($movie->comments as $comment)
        <li>{{ $comment->body }}</li>

        @endforeach
</ul>
      </ul>

      <h4>Post a Comment</h4>
      <form method="POST" action="/movies/comment/add/{{ $movie->id }}">

        {{ csrf_field() }}

        <div class="form-group">
          <label>Text</label>
          <textarea name="text"class="form-control" placeholder="Enter comment" rows="10" cols="80"></textarea>
          @include('movies.partials.error_message', ['field' => 'text']) <!-- gadjamo name od inputa -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
