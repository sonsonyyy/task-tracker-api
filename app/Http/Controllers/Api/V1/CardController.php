<?php

namespace App\Http\Controllers\Api\V1;

use App\Actions\Card\CreateCard;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreCardRequest;
use App\Http\Resources\V1\CardResource;
use Illuminate\Http\JsonResponse;

class CardController extends Controller
{
    public function store(StoreCardRequest $request, CreateCard $action): JsonResponse
    {
        $card = $action->handle($request->validated());

        return (new CardResource($card))
            ->response()
            ->setStatusCode(201);
    }
}
