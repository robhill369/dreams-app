<x-navbar>
    <x-_navbar-filler />
    <!--Hero-->
    <div class="relative w-screen overflow-hidden mx-auto flex flex-col align-center md:flex-row md:h-96">
        <img src="https://cdn.pixabay.com/photo/2019/03/28/10/19/sky-4086848_1280.jpg"
            class="w-full h-full object-cover">

        <div class="absolute w-full inset-x-0 leading-4 py-16">
            <div class="container mx-auto text-right flex flex-col lg:w-1/2 justify-center items-end pt-6 flex-wrap">
                <h1 class="font-medium text-6xl mb-1 text-yellow-50 inline tracking-wide">
                    Discover yourself...
                </h1>
                <h1 class="font-medium text-6xl mb-4 text-yellow-50 inline tracking-wide">
                    with<span class="text-gray-800 font-bold">
                        Remi.
                </h1>
                <p class="text-2xl font-medium mb-6 text-gray-800">
                    Improve your mental health and unlock new ideas by documenting how you dream.
                </p>
                <x-primary-button>
                    <x-slot name='href'>'#dreamsearch'</x-slot>
                    See For Yourself
                </x-primary-button>
            </div>
        </div>
    </div>

    <x-landing-page-banner/>

    <div id="dreamsearch" class="bg-yellow-50 py-7 items-center">
        <h2 class="text-center text-2xl text-gray-800 tracking-wide">Dreams can be bonkers, hilarious, and strange. Share your stories with the world, and find the same kinda crazy!</h2>
    </div>

    <div class="bg-yellow-50 relative shadow-lg flex pb-8 z-10">
        <div class=" mx-auto w-auto container ">
                <form method="POST" action="#">
                    @csrf
                    <div class="lg:flex text-3xl shadow-lg rounded-full text-gray-800 bg-yellow-50 border border-gray-800 lg:py-3 flex">
                        <div>
                            <input type="text" name="search" placeholder="Search keywords..."
                                class="pr-20 pl-6 focus:outline-none bg-transparent placeholder-gray-400 py-1 text-gray-800 "
                                value="{{ request('search') }}">
                        </div>
                    </div>

                    <x-category-filter-button/>
                    <div class="justify-center flex mt-7">
                        <button class="px-10 bg-pink-700 text-yellow-50 rounded-full px-6 py-4 shadow-lg tracking-wider uppercase text-sm font-bold" type="submit">
                        <a href="/posts">Search</a>
                        </button>
                    </div>
                </form>
        </div>
        </div>

    
        
    </div>

    <div class="bg-gradient-to-r from-gray-300 via-gray-100 to-gray-300 relative w-full flex flex-wrap">
        <div class="container w-full my-7 gap-10 mx-auto grid grid-cols-2 grid-rows-12">
            <div class="col-span-1 col-start-1 row-span-3">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-2 row-start-3 row-span-3">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-1 row-start-5 row-span-3">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-2 row-start-7 row-span-3">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-1 row-start-9 row-span-3">
                <x-post-card/>
            </div>
            
        </div>
    </div>

    <x-footer class="relative" />
</x-navbar>
