<x-head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 overflow-hidden shadow-lg sm:rounded-lg">

                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-1 text-5xl font-bold tracking-tight text-gray-900 ">{{ $post->title }}
                    </h5>
                    <p class="mb-1 font-light text-lg text-gray-700">
                        Publicado por <strong> {{ $post->user->name }}
                        </strong> el {{ $post->created_at->format('d M Y') }}
                    </p>
                    <p class="mb-3 text-3xl font-normal text-gray-700
                    ">{{ $post->body }}
                    </p>
                    <form action="{{ route('posts.like', $post) }}" method="POST" class="inline-block">
                        @csrf
                        @if ($post->likes()->where('user_id', Auth::id())->exists())
                            <button type="submit"
                                class=" border bg-blue-700 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:focus:ring-blue-800">
                                <svg class="w-4 h-4 mx-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 18 18">
                                    <path
                                        d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
                                </svg>
                                <span class="sr-only">Icon description </span> {{ $post->likeCount() }} Likes
                            </button>
                        @else
                            <button type="submit"
                                class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg class="w-4 h-4 mx-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 18 18">
                                    <path
                                        d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
                                </svg>
                                <span class="sr-only">Icon description</span> {{ $post->likeCount() }} Likes
                            </button>
                        @endif

                    </form>

                </div>
                @if ($post->image)
                    <div
                        class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg">
                        <img src="{{ asset('/images/' . $post->image) }}" alt="{{ $post->title }}"
                            class="rounded-lg w-full">
                    </div>
                @else
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/images/panigale.png" alt="">
                @endif

                <div class="p-5 ">
                    @auth
                        <form action="{{ route('comments.store', $post) }}" method="POST">
                            @csrf
                            <label for="body" class="block mb-2 text-xl font-medium text-gray-900">Escribe un
                                comentario</label>
                            <textarea id="body" name="body" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Coméntanos qué te pareció la publicación..."></textarea>

                            <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 mt-2">Comentar</button>
                        </form>
                    @endauth

                    <h3>Comentarios:</h3>


                    @foreach ($post->comments as $comment)
                        <div class="border-b mb-2 pb-2">
                            <strong>{{ $comment->user->name }}:</strong>
                            <p>{{ $comment->body }}</p>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</x-head>
