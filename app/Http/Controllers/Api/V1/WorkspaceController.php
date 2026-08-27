<?php

namespace App\Http\Controllers\Api\V1;

use App\Actions\Workspace\CreateWorkspace;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreWorkspaceRequest;
use App\Http\Resources\V1\WorkspaceResource;
use Illuminate\Http\JsonResponse;

class WorkspaceController extends Controller
{
    public function store(StoreWorkspaceRequest $request, CreateWorkspace $action): JsonResponse
    {
        $workspace = $action->handle($request->validated());

        return (new WorkspaceResource($workspace))
            ->response()
            ->setStatusCode(201);
    }
}
