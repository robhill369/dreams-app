<footer {{ $attributes->merge(['class'=>"w-full bottom-0"]) }}>
    <div class="relative bottom-0 w-full py-10"
        style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-2 text-white"> test test test test </h2>
            <h3 class="text-2xl mb-8 text-gray-200">
                Monitor your health vitals smartly anywhere you go.
            </h3>

            <x-primary-button><x-slot name='href'>'/login'</x-slot>
                View more dreams</x-primary-button>
        </div>
    </div>
</footer>