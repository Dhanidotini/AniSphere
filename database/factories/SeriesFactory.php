<?php

namespace Database\Factories;

use App\Enums\SeriesTypes;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Series>
 */
class SeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'     =>  $this->faker->sentence(),
            'slug'      =>  $this->faker->slug(),
            'type'      =>  Arr::random(SeriesTypes::cases()),
            'synopsis'  =>  $this->faker->realText(),
            'year'      =>  $this->faker->numberBetween(1000, 3000),
            'user_id'   =>  1
        ];
    }
}
