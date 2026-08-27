<?php

namespace App\Http\Controllers\Api\V1;

use App\Actions\Board\CreateBoard;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreBoardRequest;
use App\Http\Resources\V1\BoardResource;
use Illuminate\Http\JsonResponse;

class BoardController extends Controller
{
    public function store(StoreBoardRequest $request, CreateBoard $action): JsonResponse
    {
        $board = $action->handle($request->validated());

        return (new BoardResource($board))
            ->response()
            ->setStatusCode(201);
    }
}
