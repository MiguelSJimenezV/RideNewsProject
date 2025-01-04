<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Like;

class LikeSeeder extends Seeder
{
    public function run(): void
    {
        Like::factory(100)->create(); // Crear 100 likes
    }
}
