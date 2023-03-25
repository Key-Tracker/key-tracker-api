<?php

namespace Database\Factories;

use App\Data\Models\Vocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class VocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vocation::class;
        
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'company_id' => Arr::random(range(0,39)),
            'workplace_type' => Arr::random(['remote', 'on-site', 'hybrid']),
            'location' => $this->faker->city(),
            'employment_type' => Arr::random(['full-time', 'part-time']),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'notification' => Arr::random(['email', 'personal website']),
        ];
    }
}
