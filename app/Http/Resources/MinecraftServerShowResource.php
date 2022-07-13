<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

class MinecraftServerShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'ip' => $this->ip,
            'server_site' => $this->server_site,
            'description' => $this->description
        ];

        $query = new MinecraftQuery;

        try {
            $query->Connect($data['ip']);
            $data['players_online'] = count($query->GetPlayers());
        } catch (MinecraftQueryException $error) {
            Log::info($error->getMessage());
        }

        return $data;
    }
}
