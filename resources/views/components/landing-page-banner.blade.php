<div class="py-8 w-full bg-gradient-to-r from-indigo-400 to-purple-700">
    <div class="container w-full mx-auto gap-5  grid grid-cols-6 grid-rows-4 text-yellow-100">
        {{-- style="background: linear-gradient(90deg, #6194cf 0%, #ab86cf 100%)" --}}

        <h2 class="col-span-4 row-span-1 text-4xl text-yellow-50 font-semibold self-center">
            The genius dream journal for realising your potential.
        </h2>

        <div class="col-span-2 row-span-4">
            <img src="https://images.unsplash.com/photo-1536108978996-128e3e2a9783?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RhcnJ5JTIwbmlnaHR8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"
                alt="" class=" w-96 h-96 rounded-full object-fit ml-16 border border-yellow-50 shadow-lg">
        </div>

        <div class="col-span-2 row-span-3 w-full text-yellow-50 ">
            <h3 class="text-2xl font-semibold mb-4 text-yellow-50">How does it work? </h3>
            <p class="text-lg break-words">Remi is a dream journal tool that provides deep insight into how you think in the subconcious world. With daily reminders to journal last night's storyline, Remi's machine-learning technology analyses your posts over time, identifies recurring themes, and provides powerful insights on demand.<br><br>The more you journal, the more insightful your experience with Remi will be!</p>
        </div>

        <div class="md:ml-8 col-span-2 row-span-3 w-full text-yellow-50">
            <h3 class="text-2xl font-semibold mb-4 text-yellow-50">The benefits of dream journalling...</h3>
            <p class="text-lg">There are many reasons why Remi could help you:</p>
                <ul class="list-disc pl-5 text-lg mt-2">
                        <li class="mt-1">Fuel your creativity.</li>
                        <li class="mt-1">Rehearse your response to stressful situations.</li>
                        <li class="mt-1">Learn to dream lucidly.</li>
                        <li class="mt-1">Process emotions more easily.</li>
                </ul>
                @guest
                <x-primary-button class="mt-4 float-right" id="dreamsearch">
                    <x-slot name='href'>/register</x-slot>
                        Start Your Journal
                    </x-primary-button> 
                @endguest
                
        </div>
        </div>
    </div>
</div>