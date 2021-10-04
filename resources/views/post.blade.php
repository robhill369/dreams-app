<x-layout.static-page>
    
    @auth
        
    <div class="container absolute inset-0 mx-auto flex-wrap">
        <div class="py-5 mt-32 mx-5 flex justify-between items-center">
        <x-primary-button>
            <x-slot name='href'>/posts</x-slot>
            More Posts
        </x-primary-button>
    <x-post-card-large  :post="$post"/>
        </div>
    </div>

    @else
    <div class="container absolute inset-0 mx-auto flex-wrap">
        <div class="py-5 mt-32 mx-5 flex justify-between items-center">
        <x-primary-button>
            <x-slot name='href'>/posts</x-slot>
            More Posts
        </x-primary-button>
        <x-primary-button class="bg-pink-700 text-yellow-50">
            <x-slot name='href'>/register</x-slot>
            Start Your Journal
        </x-primary-button>
    <x-post-card-large  :post="$post"/>
        </div>
    </div>
    @endauth
</x-layout.static-page>
