<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserFilterResource;

class Filter
{
    public function index()
    {
        return new UserFilterResource([]);
    }

    public function store()
    {

    }
}
