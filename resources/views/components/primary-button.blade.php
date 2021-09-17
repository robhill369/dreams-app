<button {{ $attributes->merge(['class'=>"bg-white bg-yellow-50 text-gray-900 hover:bg-pink-700 hover:text-white rounded-full px-8 shadow-lg tracking-wider py-4 uppercase text-sm font-bold"])}}>
   <a href={{$href ?? ''}}>{{$slot}}</a> 
</button>