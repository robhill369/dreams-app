@props(['post'])
</div>
<article>
    <div class="rounded-2xl shadow-lg relative overflow-hidden bg-yellow-50">
        <x-postcard.header.category.logic :post="$post"/>
        <x-postcard.body :post="$post" class="overflow-y-auto text-4xl h-80"/>
        <x-postcard.footer :post="$post"/>
    </div>
</article>
</div>