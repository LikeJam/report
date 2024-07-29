<?php

namespace App\Models\Filters;

use Illuminate\Database\Eloquent\Model;

interface FilterInterface
{
    public function apply(Model $model);
}
