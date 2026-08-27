<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')
    ->as('api.v1.')
    ->group(base_path('routes/api/v1.php'));
