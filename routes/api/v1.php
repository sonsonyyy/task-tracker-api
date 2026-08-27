<?php

use App\Http\Controllers\Api\V1\BoardController;
use App\Http\Controllers\Api\V1\WorkspaceController;
use Illuminate\Support\Facades\Route;

Route::post('/workspaces', [WorkspaceController::class, 'store']);

Route::post('/boards', [BoardController::class, 'store']);
