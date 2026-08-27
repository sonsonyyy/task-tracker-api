<?php

use App\Http\Controllers\Api\V1\WorkspaceController;
use Illuminate\Support\Facades\Route;

Route::post('/workspace', [WorkspaceController::class, 'store']);
