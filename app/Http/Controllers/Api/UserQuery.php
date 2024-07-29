<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserQueryRequest;
use App\Models\User;

class UserQuery
{
    public function __invoke(UserQueryRequest $request)
    {
        $params = $request->getParams();

        return User::query()
            ->where('name', 'like', '%'.$params->search.'%')
            ->get();
    }
}
