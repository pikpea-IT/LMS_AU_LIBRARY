<?php

namespace Database\Factories;

use App\Models\Generation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Generation>
 */
class GenerationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Generation::class;
    public function definition(): array
    {
        return [
            'code' => $this->faker->uuid(),
            'name' => "ជំនាន់​ទី #{$this->faker->numberBetween(1, 13)}",
            'name_english' => "Generation #{$this->faker->numberBetween(1, 13)}",
            'description' => $this->faker->text(),
            'description_english' => $this->faker->text(),
            'order' => $this->faker->numberBetween(1, 100),
            'year' => $this->faker->numberBetween(2020, date('Y')),
            'is_current' => $this->faker->boolean(),
            'status' => $this->faker->boolean(),
        ];
    }
}