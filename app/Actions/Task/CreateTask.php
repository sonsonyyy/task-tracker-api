<?php

declare(strict_types=1);

namespace App\Actions\Task;

use App\Models\Task;

class CreateTask
{
    public function createTask(array $data): Task
    {
        return Task::create($data);
    }
}
