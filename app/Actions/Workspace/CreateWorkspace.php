<?php

namespace App\Actions\Workspace;

use App\Models\WorkSpace;

class CreateWorkspace
{
    public function handle(array $data): WorkSpace
    {
        return WorkSpace::create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
    }
}
