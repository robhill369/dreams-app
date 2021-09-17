<x-layout>
    <div class='h-screen overflow-hidden'>
        <img src="https://cdn.pixabay.com/photo/2019/03/28/10/19/sky-4086848_1280.jpg"
    class="w-full h-full object-cover overflow-hidden">
    </div>
    {{ $slot }}
    <x-footer class="absolute overflow-y-auto"/>
</x-layout>