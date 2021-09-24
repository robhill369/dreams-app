<article>
    <div class="rounded-2xl shadow-lg relative overflow-hidden bg-yellow-50">
        <header
            class="bg-gradient-to-r from-purple-500 via-indigo-400 to-purple-500 text-yellow-50 shadow-md z-20 py-2 px-5">
            {{-- from-pink-500 via-red-400 to-pink-500 --}}
            <div class="mt-3 flex justify-between">
                <h1 class="text-4xl truncate font-medium whitespace-nowra">
                    Post title
                </h1>
                <button type="button" action="/posts"
                    class="ml-8 float-right px-5 h-12 rounded-full border border-yellow-50 font-md">
                    Category
                </button>
            </div>
            <span class="block text-white text-md">
                Published at date
            </span>
        </header>

        <div class="text-3xl mt-4 space-y-4 line-clamp-4 px-8 text-gray-700">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </div>

        <footer class="mt-5 flex text-gray-800 justify-between items-center py-3 shadow-inner">
            <div class="px-5">

                <div>
                    <a class='inline-flex items-center' href="/author"><img src="https://i.pravatar.cc/100" alt=""
                            width="45" height="45" class="rounded-full">
                        <h3 class="ml-3 font-normal text-indigo-800 text-lg">
                            Author
                        </h3>
                    </a>
                </div>
            </div>

            <div>
                <a href="/posts/post"
                    class="text-sm transition duration-150 ease-in-out border border-gray-800 bg-yellow-50 hover:border-yellow-50 hover:bg-pink-700 hover:text-white rounded-full px-4 py-3 mr-5 tracking-wider uppercase text-sm font-bold">Read
                    More</a>
            </div>
        </footer>
    </div>
</article>
