<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    @foreach ($posts as $post)
        <x-card-post image="" alt="{{ $post->title }}" title="{{ $post->title }}"
            body="{{ Str::limit($post->body, 100) }}"
            posted="Publicado por {{ $post->user->name }} el {{ $post->created_at->format('d M Y') }}"
            link="{{ route('posts.show', $post->id) }}" linkText="Leer Más" />
    @endforeach
</div>
