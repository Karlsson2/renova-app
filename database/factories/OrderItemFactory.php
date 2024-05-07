<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fraktioner = ['Grovavfall', 'Trädgårdsavfall', 'Impregnerat Trä', 'Brännbart avfall'];
        $priority = [1, 2, 3];

        return [
            'fraction' => $fraktioner[array_rand($fraktioner)],
            'containers' => fake()->randomNumber(),
            'priority' => $priority[array_rand($priority)],
            'other' => fake()->sentence()
        ];
    }
}
