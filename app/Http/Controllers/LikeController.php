<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggleLike(Post $post)
    {
        $userId = Auth::id(); // Obtén el ID del usuario autenticado

        // Si el usuario ya ha dado like, lo elimina; si no, lo agrega
        if ($post->likes()->where('user_id', $userId)->exists()) {
            $post->likes()->where('user_id', $userId)->delete();
        } else {
            $post->likes()->create(['user_id' => $userId]);
        }

        return back();
    }
}
