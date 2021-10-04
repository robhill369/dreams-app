<span class="block text-md text-yellow-50 pb-1">
    Published <time>{{ $post->created_at->diffForHumans() }}</time> by 
    @auth
    <a class="text-gray-800 capitalize" href="/posts/?user={{ $post->author->username }}" >{{ $post->author->username }}</a>
    @else
    <a class="text-yellow-50 capitalize">{{ $post->author->username }}</a>
    @endauth
</span>