<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [

    ];

    public function user() {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function media() {
        return $this->belongsTo(Media::class);
    }

    public function get($pageSize = 3) {
        return Post::paginate($pageSize);
    }

    public function doDelete() {
        $this->delete();
    }

    public function doCreate($post) {
        $post['author_id'] = \Auth::user()->id;
        $post['media_id'] = 2;
        $post['posted_at'] = \Carbon\Carbon::now();
        $this->create($post);
    }

    public function doUpdate($post) {
        $post['posted_at'] = \Carbon\Carbon::now();
        $this->update($post);
    }
}
