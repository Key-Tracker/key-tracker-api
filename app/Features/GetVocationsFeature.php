<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Vocation\Jobs\GetVocationsJob;

class GetVocationsFeature extends Feature
{
    public function handle(Request $request)
    {
        return $this->run(GetVocationsJob::class);
    }
}
