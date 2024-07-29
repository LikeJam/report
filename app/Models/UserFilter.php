<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFilter extends Model
{
    protected $fillable = [
        'name',
        'label',
        'meta',
        'cast',
        'active',
    ];
}
