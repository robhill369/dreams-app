<div 
    
{{ $attributes->merge(['class'=>"relative w-screen overflow-hidden mx-auto flex flex-col align-center md:flex-row"]) }}
    >
        <img src="https://cdn.pixabay.com/photo/2019/03/28/10/19/sky-4086848_1280.jpg"
            class="w-full h-full object-cover">

        <div class="absolute w-full inset-x-0 leading-4 py-16">
            <div class="container mx-auto text-right flex flex-col lg:w-1/2 justify-center items-end pt-6 flex-wrap">
                @auth
                    <h1 class="font-medium text-6xl mb-1 text-yellow-50 inline tracking-wide"> 
                        Hello {{ auth()->user()->first_name }}...
                    </h1>
                    <h1 class="font-medium text-6xl mb-1 text-yellow-50 inline tracking-wide">
                        welcome to <span class="text-gray-800 font-bold">Remi.
                    </h1>
                @else
                    <h1 class="font-medium text-6xl mb-1 text-yellow-50 inline tracking-wide">
                        Discover yourself...
                    </h1>
                    <h1 class="font-medium text-6xl mb-4 text-yellow-50 inline tracking-wide">
                        with <span class="text-gray-800 font-bold">Remi.
                    </h1>
                    <p class="text-2xl font-medium mb-6 text-gray-800">
                        Improve your mental health and unlock new ideas by documenting how you dream.
                    </p>
                    <x-primary-button>
                        <x-slot name='href'>#dreamsearch</x-slot>
                        See For Yourself
                    </x-primary-button>
                @endauth
                
            </div>
        </div>
    </div>