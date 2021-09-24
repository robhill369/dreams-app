<x-layout.navbar>
    <x-layout._navbar-filler />
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
                    <x-slot name='href'>#dreamsearch</x-slot>
                    See For Yourself
                </x-primary-button>
            </div>
        </div>
    </div>

    <x-landing-page-banner/>

    <x-search-tagline id="dreamsearch" >Dreams can be bonkers, hilarious, and strange. Share
        your stories with the world, and find the same kinda crazy!
    </x-search-tagline>

    <x-_search-banner/>

    <div class="bg-gradient-to-r from-gray-300 via-gray-100 to-gray-300 relative w-full flex flex-wrap">
        <div class="container w-full my-7 gap-10 mx-auto grid grid-cols-2 grid-rows-7">
            <div class="col-span-1 col-start-1 row-span-2">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-2 row-start-2 row-span-2">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-1 row-start-3 row-span-2">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-2 row-start-4 row-span-2">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-1 row-start-5 row-span-2">
                <x-post-card/>
            </div>
            <div class="col-span-1 col-start-2 row-start-6 row-span-2">
                <x-post-card/>
            </div>
            
        </div>
    </div>

</x-layout.navbar>
<x-layout.footer class="relative" />