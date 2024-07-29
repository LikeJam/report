<?php

namespace App\Models\Filters;

use Illuminate\Database\Eloquent\Model;

class EmailFilter implements FilterInterface
{
    public function apply(Model $model)
    {
        $model->filters;
    }
}
