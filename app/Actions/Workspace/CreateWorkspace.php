<?php

namespace App\Actions\Workspace;

use App\Models\Workspace;

class CreateWorkspace
{
    public function handle(array $data): Workspace
    {
        return Workspace::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    }
}
