
<div class="container w-full my-7 gap-10 mx-auto grid grid-cols-2 grid-rows-7">
    <div class="col-span-1 col-start-1 row-span-2">
        <x-post-card :post="$posts[0]"/>
    </div>
    <div class="col-span-1 col-start-2 row-start-2 row-span-2">
        <x-post-card :post="$posts[1]" />
    </div>
    <div class="col-span-1 col-start-1 row-start-3 row-span-2">
        <x-post-card :post="$posts[2]"/>
    </div>
    <div class="col-span-1 col-start-2 row-start-4 row-span-2">
        <x-post-card :post="$posts[3]"/>
    </div>
    <div class="col-span-1 col-start-1 row-start-5 row-span-2">
        <x-post-card :post="$posts[4]"/>
    </div>
    <div class="col-span-1 col-start-2 row-start-6 row-span-2">
        <x-post-card :post="$posts[5]"/>
    </div>
</div>