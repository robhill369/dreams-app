<footer {{ $attributes->merge(['class'=>"w-full bottom-0 text-center mx-auto"]) }}>
    <div class="relative bottom-0 w-full py-10"
        style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">
        <div class="container mx-auto px-6 justify-items-center">
            <h2 class="text-4xl font-bold mb-2 text-white"> test test test test </h2>
            <h3 class="text-2xl mb-6 text-gray-200">
                Monitor your health vitals smartly anywhere you go.
            </h3>

            <div class="mt-6">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full mb-12">
        
                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <div><input 
                                name="subscribe-email" 
                                id="subscribe-email" 
                                type="email" 
                                placeholder="Your email address"
                                class="focus:ring-0 border-none text-xl text-gray-800 lg:bg-transparent lg:py-0 pl-1 focus-within:outline-none pr-10"> 
                                    @error('subscribe-email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <x-primary-button type="submit">
                            Subscribe
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</footer>