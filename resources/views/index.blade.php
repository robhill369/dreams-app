<x-layout>
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
                        Remi</span>.</span>
                </h1>
                <p class="text-xl font-medium mb-6 text-gray-800">
                    Improve your memory, unlock new ideas, and have fun by recording your dreams.
                </p>
                <x-primary-button>
                    <x-slot name='href'>'/register'</x-slot>
                    Start your journey
                </x-primary-button>
            </div>
        </div>
    </div>

    <div class="py-10 w-full" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">
        <div class="container w-full divide-y divide-x mx-auto grid grid-cols-6 grid-rows-3 text-yellow-100">
            <div class="col-span-4 row-span-1 w-full">
                <h2 class="text-4xl font-bold mb-2 text-white"> test test test test </h2>
                <h3 class="text-2xl mb-8 text-gray-200">
                    Monitor your health vitals smartly anywhere you go.
                </h3>
                <x-primary-button>
                    <x-slot name='href'>'/login'</x-slot>
                    View all dreams
                </x-primary-button>
            </div>

            <div class="col-span-2 row-span-2">
                <img    src="https://images.unsplash.com/photo-1536108978996-128e3e2a9783?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RhcnJ5JTIwbmlnaHR8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"
                        alt=""
                        class=" w-96 h-96 rounded-full object-fit ml-16">
            </div>

            <div class="col-span-4 row-span-1 py-5">
                dnejnweioewnocuiwecvuiniwqmxiocbwcviudnopewdebcbwjknxldsahcwrvh rh eigviucf ec frkgv
                rscsdk;mlnekncnwlkxlkwxmwnwn
            </div>



            <div class="col-span-6 row-span-1 py-5">
                dnejnweioewnocuiwecvuiniwqmxiocbwcviudnopewdebcbwjknxldsahcwrvh rh eigviucf ec frkgv
                rscsdk;mlnekncnwlkxlkwxmwnwn
            </div>
        </div>
    </div>

    <div class="w-full bg-yellow-50 flex flex-wrap h-screen">
    </div>
    <x-footer class="relative" />
</x-layout>
