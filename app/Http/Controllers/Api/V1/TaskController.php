<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Actions\Task\CompleteTask;
use App\Actions\Task\CreateTask;
use App\Actions\Task\DeleteTask;
use App\Actions\Task\FetchTasks;
use App\Actions\Task\UpdateTask;
use App\Http\Requests\V1\StoreTaskRequest;
use App\Http\Requests\V1\UpdateTaskRequest;
use App\Http\Resources\V1\TaskResource;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

final class TaskController
{
    public function index(FetchTasks $action): JsonResponse
    {
        $tasks = $action->fetchTasks();

        return TaskResource::collection($tasks)
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function store(StoreTaskRequest $request, CreateTask $action): JsonResponse
    {
        $task = $action->createTask($request->validated());

        return (new TaskResource($task))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Task $task): JsonResponse
    {
        return (new TaskResource($task))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function update(UpdateTaskRequest $request, Task $task, UpdateTask $action): JsonResponse
    {
        $task = $action->updateTask($task, $request->validated());

        return (new TaskResource($task))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function destroy(Task $task, DeleteTask $action): JsonResponse
    {
        $action->deleteTask($task);

        return response()
            ->json()
            ->setStatusCode(Response::HTTP_NO_CONTENT);
    }

    public function complete(Task $task, CompleteTask $action): JsonResponse 
    {
        $task = $action->completeTask($task);

        return (new TaskResource($task))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }
}
