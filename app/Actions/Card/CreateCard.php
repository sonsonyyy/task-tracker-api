<?php

namespace App\Actions\Card;

use App\Models\Card;

class CreateCard
{
    public function handle(array $data): Card
    {
        return Card::create([
            'board_id' => $data['board_id'],
            'title' => $data['title'],
        ]);
    }
}
