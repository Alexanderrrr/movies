<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Movie extends Model
{
    protected $guarded = ['id'];

    const VALIDATION_RULES = [

        'title' => 'required',
        'genre' => 'required',
        'director' => 'required',
        'year' => 'required | numeric |  between:1900,2018',
        'storyline' => 'required | max:1000',



    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
