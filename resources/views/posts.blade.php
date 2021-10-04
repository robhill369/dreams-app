

<x-layout.navbar>

    <x-layout._navbar-filler />

    <x-search-tagline>
        Dreams can be bonkers, hilarious, and strange. Share
        your stories with the world, and find the same kinda crazy!
    </x-search-tagline>

    <x-_search-banner />

    <x-posts-list :posts="$posts"/>

</x-layout.navbar>

<x-layout.footer class="relative" />
