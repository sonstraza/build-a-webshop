<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path' => $this->faker->randomElement(['media/shorts.jpg', 'media/shorts2.jpg', 'media/sweater.jpg', 'media/sweater2.jpg', 'media/tshirtBlack.jpg'])
        ];
    }
}
