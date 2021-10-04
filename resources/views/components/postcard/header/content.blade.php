<div class="mt-3 flex justify-between">
    <h1 class="text-4xl truncate font-medium whitespace-nowra">
        {{ $post->title }}
    </h1>
        <x-category-button :category="$post->category"/>
</div>


@if (Route::current()->getName() == 'posts')
    <x-postcard.header.publish-tag.timestamp-author :post="$post"/>
@else
    <x-postcard.header.publish-tag.timestamp :post="$post"/>
@endif
