<?php

namespace App\Http\Controllers;

use Lucid\Units\Controller;
use App\Features\GetVocationsFeature;

class VocationController extends Controller
{
    public function index()
    {
        return $this->serve(GetVocationsFeature::class);
    }
}
