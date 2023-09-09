<?php

namespace App\Traits;

use App\Models\Post;

trait PostTrait
{
    public function getPosts()
    {
        return Post::get();
    }

}
