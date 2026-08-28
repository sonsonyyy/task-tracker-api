<?php

namespace App\Actions\Task;

use App\Models\Task;

class CompleteTask
{
    public function completeTask(Task $task): Task
    {
        return tap($task)->update(['completed_at' => now()]);
    }
}
