<?php

namespace App\QueryFilter;


class MaxCount extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->take(request($this->filterName()));
    }
}
