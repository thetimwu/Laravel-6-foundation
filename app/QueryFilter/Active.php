<?php

namespace App\QueryFilter;

use Closure;

class Active extends Filter
{
    // public function handle($request, Closure $next)
    // {
    //     if (!request()->has('active')) {
    //         return $next($request);
    //     }

    //     $builder = $next($request);

    //     return $builder->where('active', request('active'));
    // }

    public function applyFilter($builder)
    {
        return $builder->where('active', request($this->filterName()));
    }
}
