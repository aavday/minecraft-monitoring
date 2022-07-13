<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MinecraftServerIndexResource;
use App\Http\Resources\MinecraftServerShowResource;
use App\Models\MinecraftServer;

class MinecraftServersController extends Controller
{
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return MinecraftServerShowResource::collection(MinecraftServer::all());
    }

    public function show($id): MinecraftServerShowResource
    {
        return new MinecraftServerShowResource(MinecraftServer::findOrFail($id));
    }
}
