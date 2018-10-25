<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Comment extends Model

{
  protected $guarded = ['id'];

  const VALIDATION_RULES = [

      'body' => 'required | min:25'

  ];
  public function post()
  {
      return $this->belongsTo(Movie::class);
  }
}
