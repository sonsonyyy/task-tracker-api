<?php

namespace App\Actions\Board;

use App\Models\Board;

class CreateBoard
{
    public function handle(array $data): Board
    {
        return Board::create([
            'workspace_id' => $data['workspace_id'],
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    }
}
