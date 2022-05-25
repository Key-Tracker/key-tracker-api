<?php

namespace Database\Factories;

use App\Data\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class; 

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'overview' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'address' => $this->faker->address(),
            'industry' => $this->faker->word(),
            'specialties' => $this->faker->word(),
        ];
    }
}
