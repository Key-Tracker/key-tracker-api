<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Features\GetVocationsFeature;

class GetVocationsFeatureTest extends TestCase
{
    public function test_get_vocations_feature()
    {
        $response = $this->getJson('/api/jobs');
        $response->assertStatus(200)
        ->dd();
    }
}
