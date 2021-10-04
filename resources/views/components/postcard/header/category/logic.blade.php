@if($post->category_id == 1)
            <x-postcard.header.category.funny :post="$post"/>
        @elseif($post->category_id == 2)
            <x-postcard.header.category.bizarre :post="$post"/>
        @elseif($post->category_id == 3)
            <x-postcard.header.category.dull :post="$post"/>
        @else
            <x-postcard.header.category.nightmare :post="$post"/>
        @endif