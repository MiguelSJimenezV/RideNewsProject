<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Mostrar todos los posts
    public function index()
    {
        // Obtener los posts del usuario autenticado, ordenados por fecha (más recientes a más antiguos)
        $posts = Post::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc') // Ordenar por la columna created_at en orden descendente
            ->get();

        return view('posts.index', compact('posts'));
    }



    public function welcome()
    {
        $posts = Post::with('user')->latest()->take(3)->get(); // Obtener solo los últimos 3 posts
        return view('welcome', compact('posts')); // Pasar a la vista welcome
    }



    // Mostrar el formulario para crear un nuevo post
    public function create()
    {
        return view('posts.create');
    }

    // Almacenar un nuevo post
    public function store(Request $request)
    {
        // Validación de los datos del post
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image_url' => 'nullable|string',
        ]);

        // Crear el post y asignar el user_id del usuario autenticado
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->image_url = $validatedData['image_url'] ?? null;
        $post->active = true;
        $post->user_id = Auth::id(); // Asigna el ID del usuario autenticado

        $post->save(); // Guarda el post en la base de datos

        return redirect()->route('posts.index')->with('success', 'Post creado con éxito');
    }

    // Mostrar un post específico
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Mostrar el formulario para editar un post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Actualizar un post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($post->image_url) {
                Storage::disk('public')->delete($post->image_url);
            }
            $data['image_url'] = $request->file('image')->store('images', 'public');
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    // Eliminar un post
    public function destroy(Post $post)
    {
        // Eliminar la imagen del almacenamiento si existe
        if ($post->image_url) {
            Storage::disk('public')->delete($post->image_url);
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
}
