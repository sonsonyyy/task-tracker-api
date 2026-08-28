<?php

declare(strict_types=1);

namespace App\Actions\Task;

use App\Models\Task;

class UpdateTask
{
    public function updateTask(Task $task, array $data): Task
    {
        return tap($task)->update($data);
    }
}
