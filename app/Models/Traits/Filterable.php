<?php

namespace App\Models\Traits;

use App\Models\Filters\FilterInterface;

trait Filterable
{
    public function applyFilters(array $filters): static
    {
        return $this;
    }

    public function applyFilter(FilterInterface $filter): static
    {
        $filter->apply($this);

        return $this;
    }
}
