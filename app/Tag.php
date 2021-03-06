<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    use Sluggable;
    
    public function posts()
    {
        return $this->belongToMany(
            Post::class,
            'post_tags',
            'tag_id',
            'post_id'
        );
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
