
<div class="rounded-3xl overflow-hidden w-full h-72 bg-yellow-50 shadow-lg text-gray-800">
    <x-postcard.header.category.logic :post="$post"/>

    <x-postcard.body :post="$post" class="line-clamp-3"/>
        
        <footer class="flex text-gray-800 float-right">
                <div class="my-4 pb-2 mx-5 ">
                    <a href="/posts/{{ $post->slug }}"
                        class="text-sm transition border border-gray-800 hover:border-yellow-50 duration-150 ease-in-out bg-white bg-yellow-50 hover:bg-pink-700 hover:text-white rounded-full px-4 py-3 tracking-wide uppercase text-sm font-bold"
                        >Read More</a>
                </div>
        </footer> 
        
    </div>

       
        