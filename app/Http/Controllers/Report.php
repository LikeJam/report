<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller;

class Report extends Controller
{
    public function __invoke()
    {
        return Inertia::render('User/Report');
    }
}
