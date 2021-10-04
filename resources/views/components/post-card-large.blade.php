@props(['post'])
</div>
<article>
    <div class="rounded-2xl shadow-lg relative overflow-hidden bg-yellow-50">
        <x-postcard.header.category.logic :post="$post"/>
        <x-postcard.body :post="$post" class="overflow-y-auto text-4xl h-80"/>
        <footer class=" z-30 mt-5 flex text-gray-800 justify-between items-center py-3 shadow-inner">
            <div class="px-5">
                <div class="inline-flex items-center">
                    <a href="/author"><img src="https://i.pravatar.cc/100"
                            alt="" width="45" height="45" class="rounded-full">
                            @auth
                                <x-author-button 
                                :user="$post->author"
                                class="ml-3"/>
                            @else
                                <a class="ml-3 capitalize">{{ $post->author->username }}</a>
                            @endauth
                    </a>
                </div>
            </div>
        </footer>
        
    </div>
</article>
</div>