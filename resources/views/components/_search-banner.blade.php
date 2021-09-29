<div class="
    {{-- sticky top-20  --}}
    bg-yellow-50 relative shadow-lg flex pb-4 z-10">
        <div class=" mx-auto w-auto container ">
                <form method="POST" action="#">
                    @csrf
                    <div class="lg:flex text-3xl shadow-lg rounded-full text-gray-800 bg-white border border-gray-800 lg:py-3 flex">
                        <div>
                            <input type="text" name="search" placeholder="Search keywords..."
                                class="focus:ring-0 pl-6 border-none text-2xl bg-transparent placeholder-gray-400 py-1 text-gray-800 "
                                value="{{ request('search') }}">
                        </div>
                    </div>

                    <x-category-filter-button/>
                    <div class="justify-center flex mt-7">
                        <button class="px-10 bg-pink-700 text-yellow-50 rounded-full px-6 py-4 shadow-lg tracking-wider uppercase text-sm font-bold" type="submit">
                        Search
                        </button>
                    </div>
                </form>
        </div>
        </div>

    
        
    </div>