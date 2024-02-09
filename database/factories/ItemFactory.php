<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{

    protected $model = Item::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_id' => 1,//$this->faker->numberBetween(1, 3),
            'title' => $this->faker->sentence(3),
            'sub_title' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
