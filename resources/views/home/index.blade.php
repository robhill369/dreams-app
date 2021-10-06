<x-layout.navbar>
    <x-layout._navbar-filler />
    <!--Hero-->

    <x-banner-image class="md:h-96"/>   

    <x-landing-page-banner/>


        <x-search-tagline >Dreams can be bonkers, hilarious, and strange. Share
            your stories with the world, and find the same kinda crazy!
        </x-search-tagline>
        <x-_search-banner/>
    

    <div class="bg-gradient-to-r from-gray-300 via-gray-100 to-gray-300 relative w-full flex flex-wrap">
        @auth

            {{-- Logic to be added to show guest section after a post has aleady been submitted that day --}}
                {{-- <div class="w-full inset-x-0 leading-4 py-10">
                    <x-form.create-post-form>
                        What did you dream about last night?
                    </x-form.create-post-form>
                </div> --}}
                <x-posts-grid :posts="$posts"/>
        @else
            <x-posts-grid :posts="$posts"/>
        @endauth
    </div>



</x-layout.navbar>
<x-layout.footer class="relative" />