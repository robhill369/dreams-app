<footer class=" z-30 mt-5 flex text-gray-800 justify-between items-center py-3 shadow-inner">
    <div class="px-5">
        <div class="inline-flex items-center">
            <a href="/author"><img src="https://i.pravatar.cc/100"
                    alt="" width="45" height="45" class="rounded-full">
                    @auth
                        <x-author-button 
                        :user="$post->author"
                        class="ml-3"/>
                    @else
                        <a class="ml-3 capitalize">{{ $post->author->username }}</a>
                    @endauth
            </a>
        </div>
    </div>
    <div>
        <a href="/posts/{{ $post->slug }}"
            class="text-sm transition duration-150 ease-in-out border border-gray-800 bg-yellow-50 hover:border-yellow-50 hover:bg-pink-700 hover:text-white rounded-full px-4 py-3 mr-5 tracking-wider uppercase text-sm font-bold">Read
            More</a>
    </div>
</footer>