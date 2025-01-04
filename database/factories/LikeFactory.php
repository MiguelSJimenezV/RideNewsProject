<?php

namespace Database\Factories;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    public function definition(): array
    {
        return [

            'post_id' => Post::inRandomOrder()->first()->id, // Post existente

            'user_id' => User::inRandomOrder()->first()->id, // Usuario existente

        ];
    }
}
