<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl(640, 480, 'posts'),
            'active' => $this->faker->boolean,
            'user_id' => User::factory(), // Relacionar con un usuario
        ];
    }
}
