<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;

    protected $fillable = ['title'];

    public function posts()
    {
        return $this->belongsToMany(
            Post::class,
            'post_tags',
            'tag_id',
            'post_id'
        );
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
            ];
    }
}
