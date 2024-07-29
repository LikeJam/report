<?php

use App\Casts\EmailTypeItemsCast;

return [
    [
        'name'  => 'registered',
        'label' => 'Registered',
    ],
    [
        'name'  => 'verified',
        'label' => 'Verified',
    ],
    [
        'name'  => 'emailTypes',
        'label' => 'Email type',
        'cast'  => EmailTypeItemsCast::class,
    ],
];
