<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function media() {
        return $this->belongsTo(Media::class);
    }
}
