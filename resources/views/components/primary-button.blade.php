<a 
href="{{$href ?? ''}}"
{{ $attributes->merge(['class'=>"transition duration-150 ease-in-out bg-yellow-50 text-gray-900 hover:bg-pink-700 hover:text-white items-center rounded-full text-center px-6 py-4 shadow-lg tracking-wider uppercase text-sm font-bold"])}}>
{{$slot}}
</a> 