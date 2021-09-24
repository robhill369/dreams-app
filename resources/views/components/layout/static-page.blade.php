<x-layout.navbar>
    <div class='h-screen w-full overflow-hidden flex'>
        <img src="https://cdn.pixabay.com/photo/2019/03/28/10/19/sky-4086848_1280.jpg"
    class="w-full object-cover">
    </div>

    {{ $slot }}
    
</x-layout.navbar>

<x-layout.footer class="absolute overflow-y-auto"/>