<?php

namespace App\QueryFilter;

use Closure;
use Illuminate\Pipeline\Pipeline;

class Sort extends Filter
{
    // public function handle($request, Closure $next)
    // {
    //     if (!request()->has('sort')) {
    //         return $next($request);
    //     }

    //     $builder = $next($request);

    //     return $builder->orderBy('title', request('sort'));
    // }

    public function applyFilter($builder)
    {
        return $builder->orderBy('title', request($this->filterName()));
    }
}
