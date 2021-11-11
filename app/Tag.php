<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function Posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
