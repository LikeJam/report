<?php

namespace App\Casts;

use App\Models\User;

class EmailTypeItemsCast
{
    public function cast(): array
    {
        return User::query()
            ->select('email')
            ->get()
            ->toArray();
    }
}
