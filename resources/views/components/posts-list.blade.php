@props(['posts'])
<div class="flex flex-col">
    <div class="bg-gradient-to-r from-gray-300 via-gray-100 to-gray-300 h-full">
        <div class="container my-7 mx-auto w-full px-40 grid grid-cols-1 gap-6 justify-items-center">
        @auth
            @foreach ($posts as $post)
            <x-post-listing :post="$post" :user="$post->author" />
            @endforeach
            {{ $posts->links() }}
        @else
            @foreach ($posts as $post)
            <x-post-listing :post="$post" :user="$post->author" />
            @endforeach
        <div>
            <div class="mt-5 mb-6">
                <x-primary-button class="bg-pink-700 text-yellow-50">
                    <x-slot name='href'>/register</x-slot>
                    View More Posts
                </x-primary-button>
            </div>
        </div>
        @endauth     
        </div>
    </div>
</div>