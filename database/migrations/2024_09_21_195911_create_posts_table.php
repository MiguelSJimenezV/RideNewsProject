<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del post
            $table->text('body'); // Contenido del post
            $table->text('image_url')->nullable(); // URL de la imagen (opcional)
            $table->boolean('active')->default(true); // Estado del post

            // Relación con el usuario (autor)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
