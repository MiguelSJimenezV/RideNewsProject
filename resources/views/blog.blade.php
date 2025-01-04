<x-head>
    <section class="bg-gray-100 dark:bg-gray-800 py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Últimos Posts</h2>
            <x-post-list :posts="$posts" />
        </div>
    </section>
</x-head>
