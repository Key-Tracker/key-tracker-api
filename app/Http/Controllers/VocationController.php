<?php

namespace App\Http\Controllers;

use App\Http\Resources\VocationResource;
use Lucid\Units\Controller;
use App\Features\GetVocationsFeature;

class VocationController extends Controller
{
    public function index()
    {
        return VocationResource::collection($this->serve(GetVocationsFeature::class));
    }
}
