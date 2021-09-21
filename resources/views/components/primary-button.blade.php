<button {{ $attributes->merge(['class'=>"transition duration-150 ease-in-out bg-white bg-yellow-50 text-gray-900 hover:bg-pink-700 hover:text-white rounded-full px-6 py-4 shadow-lg tracking-wider uppercase text-sm font-bold"])}}>
   <a href={{$href ?? ''}}>{{$slot}}</a> 
</button>