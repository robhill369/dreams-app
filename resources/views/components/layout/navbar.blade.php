<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dreams App</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!--Totally optional :) -->

    <style>
        html {
            scroll-behavior: smooth;
        }

        .clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .clamp.one-line {
            -webkit-line-clamp: 1;
        }

    </style>

</head>


<body>
    <section>
        <nav class="w-full bg-yellow-50 shadow-lg flex flex-wrap fixed z-40 top-0 h-20">
            <div class="container justify-between relative flex items-center my-auto mx-auto w-full">
                <div>
                    <a href="/" class="flex items-center text-5xl font-bold text-gray-800">
                        Remi.
                    </a>
                </div>

                {{-- <div class="relative flex lg:inline-flex border border-gray-800 rounded-full ml-40 pl-3 py-1 pr-32 shadow-lg">
                <form method="GET" action="/">
                        <input type="text"  
                            name="search" 
                            placeholder="Search posts..."
                            class="focus:outline-none bg-transparent placeholder-gray-400 py-1 ml-1 text-gray-800"
                            value="{{ request('search') }}">
                </form>
            </div> --}}

                @auth

                    {{-- <x-dropdown>
                        <x-slot name="trigger">
                            <x-dropdown-button> --}}
                                <div class="text-gray-800 font-medium ">
                                    <ul>
                                        <div class="grid grid-cols-3 divide-x divide-grey-800 items-center justify-items-center">
                                            <li>
                                                <a class="hover:text-pink-700" href="/posts">Dreams</a>
                                            </li>
                                            <li>
                                                <a class="hover:text-pink-800 cursor-pointer" href="{{route('create-post',Auth::user()->username)}}">Create a post</a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                            
                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                                
                                
                               
                            {{-- </x-dropdown-button>
                        </x-slot>
                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Manage Posts
                        </x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post
                        </x-dropdown-item>
                        <x-dropdown-item href="#" x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>

                    </x-dropdown> --}}

                @else
                    <div class="text-gray-800 font-medium ">
                        <ul>
                            <div class="grid grid-cols-3 divide-x divide-grey-800 items-center justify-items-center">
                                <li>
                                    <a class="hover:text-pink-700" href="/posts">Dreams</a>
                                </li>
                                <li>
                                    <a class=" ml-6 hover:text-pink-700" href="/register">Register</a>
                                </li>
                                <li>
                                    <a href="/login"
                                        class="transition duration-150 ease-in-out bg-white bg-yellow-50 border border-gray-800 hover:bg-pink-700 hover:border-yellow-50 hover:text-white rounded-full px-6 ml-9 shadow-lg py-3 font-medium">
                                        Log In
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                @endauth


        </nav>
        {{ $slot }}
    </section>
</body>

</html>
