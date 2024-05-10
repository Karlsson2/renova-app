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
        $fraction_number = [117, 211, 215, 432];
        $fraktioner = ['Grovavfall', 'Trädgårdsavfall', 'Impregnerat Trä', 'Brännbart avfall'];
        $priority = [1, 2, 3];

        return [
            'fraction' => $fraction_number[array_rand($fraction_number)],
            'fraction_name' => $fraktioner[array_rand($fraktioner)],
            'container_number' => fake()->numberBetween(3000, 5000),
            'priority' => $priority[array_rand($priority)],
            'other' => fake()->sentence(),
            'taskid' => fake()->word(),
            'total_containers' => fake()->numberBetween(1, 6),
        ];
    }
}
