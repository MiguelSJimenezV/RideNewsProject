<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'body' => $this->faker->sentence,
            'post_id' => Post::inRandomOrder()->first()->id, // Post existente
            'user_id' => User::inRandomOrder()->first()->id, // Usuario existente
        ];
    }
}
