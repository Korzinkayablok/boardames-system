<?php

namespace App\Http\Admin\Resources\Game\Delete;

use App\Domain\Interfaces\Entities\GameEntityInterface;

class SuccessfullyDeletedResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    protected GameEntityInterface $game;

    /**
     * @param GameEntityInterface $game
     */
    public function __construct(GameEntityInterface $game)
    {
        $this->game = $game;
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->game->getId(),
        ];
    }

    public function toResponse($request)
    {
        return parent::toResponse($request)->setStatusCode(200);
    }


}
