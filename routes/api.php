<?php

use App\Http\Controllers\Api\Filter;
use App\Http\Controllers\Api\UserQuery;
use Illuminate\Support\Facades\Route;

Route::get('userQuery', UserQuery::class);
Route::get('filter', [Filter::class, 'index']);
Route::post('filter', [Filter::class, 'store']);
