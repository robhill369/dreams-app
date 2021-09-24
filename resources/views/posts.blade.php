<x-layout.navbar>

    <x-layout._navbar-filler />

    <x-search-tagline>
        Dreams can be bonkers, hilarious, and strange. Share
        your stories with the world, and find the same kinda crazy!
    </x-search-tagline>

    <x-_search-banner />

    <div class="flex flex-col">
        <div class="bg-gradient-to-r from-gray-300 via-gray-100 to-gray-300 h-screen">
            <div class="container my-7 mx-auto w-full px-40 grid grid-cols-1 gap-6 justify-items-center">
                <div>
                    <x-post-listing />
                </div>
                <div>
                    <x-post-listing />
                </div>
                <div>
                    <x-post-listing />
                </div>
                <div>
                    <div class="mt-5">
                        <x-primary-button class="bg-pink-700 text-yellow-50">
                            <x-slot name='href'>/register</x-slot>
                            View More Posts
                        </x-primary-button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layout.navbar>

<x-layout.footer class="relative bottom-0" />
