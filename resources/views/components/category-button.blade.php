@props(['category'])

<button href="/?category={{ $category->name }}" class="ml-8 float-right px-5 h-12 rounded-full border uppercase border-yellow-50 font-md">
    {{ $category->name }}
</button>