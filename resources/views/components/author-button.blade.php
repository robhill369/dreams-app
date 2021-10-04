@props(['post'])

<h3 {{ $attributes->merge(['class'=>"font-normal text-indigo-800 text-lg"])}}>
    <a href="/posts/?user={{ $post->author->username }}" class="capitalize">
    {{ $post->author->username }}
</a>
</h3>