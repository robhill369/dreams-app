@props(['user'])

<h3 {{ $attributes->merge(['class'=>"font-normal text-indigo-800 text-lg"])}}>
    <a href="/posts/?user={{ $user->username }}">
    {{ $user->first_name }} {{ $user->last_name }}
</a>
</h3>