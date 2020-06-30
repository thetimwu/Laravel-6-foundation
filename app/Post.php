<?php

namespace App;

use App\QueryFilter\MaxCount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;
use App\QueryFilter\Active;
use App\QueryFilter\Sort;

class Post extends Model
{
    public static function allPosts()
    {
        return app(Pipeline::class)->send(Post::query())
            ->through([Active::class, Sort::class, MaxCount::class])
            ->thenReturn()
            ->paginate(5);
    }
}
