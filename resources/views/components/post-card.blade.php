@props(['post'])
<article>
    <div class="rounded-2xl shadow-lg relative overflow-hidden h-80 bg-yellow-50">
        <x-postcard.header.category.logic :post="$post"/>
        <x-postcard.body :post="$post" class="line-clamp-3"/>
        <x-postcard.footer :post="$post"/>
    </div>
</article>
