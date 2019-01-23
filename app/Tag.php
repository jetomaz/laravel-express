<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'name'
    ];

    public function posts(){
        return $this->belongstomany('App\Post', 'posts_tags');
    }
}
