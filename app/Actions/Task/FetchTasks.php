<?php

declare(strict_types=1);

namespace App\Actions\Task;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class FetchTasks
{
    public function fetchTasks(): Collection
    {
        return Task::all();
    }
}
