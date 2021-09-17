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
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Totally optional :) -->
</head>

<body>
    <section>
        <nav class="w-full bg-yellow-50 shadow-lg flex flex-wrap fixed z-10 top-0 h-20">
            <div class="container justify-between relative flex items-center my-auto mx-auto w-full">
                <div >
                    <a href="/" class="flex items-center text-3xl font-bold text-gray-800"> Remi 
                        
                        {{-- <span class="flex items-center text-2xl text-gray-800">
                            <i class="em em-moon"></i>
                            <span class="ml-3 font-bold">Remi</span>
                        </span> --}}
                    </a>
                </div>
                
                <div class="relative flex lg:inline-flex border border-gray-800 rounded-full ml-40 pl-3 py-1 pr-32 shadow-lg">
                    <form method="GET" action="/">
                        <input type="text"  
                            name="search" 
                            placeholder="Search posts..."
                            class="focus:outline-none bg-transparent placeholder-gray-400 py-1 text-gray-800"
                            value="{{ request('search') }}">
                    </form>
                </div>
            
                <div class="text-gray-800 font-medium ">
                    <ul>  
                        <div class="grid grid-cols-3 divide-x divide-grey-800 items-center justify-items-center">   
                            <li>
                                <a class="hover:text-pink-700" href="#">Dreams</a>
                            </li>
                            <li>
                                <a class=" ml-6 hover:text-pink-700" href="/register">Register</a>
                            </li>
                            <li>
                                <button class="bg-white bg-yellow-50 border border-gray-800 hover:bg-pink-700 hover:border-yellow-50 hover:text-white rounded-full px-6 ml-9 shadow-lg py-2 font-medium">  
                             <a href="/login">Log In</a>
                                </button>
                            </li>
                        </div>
                    </ul>
                </div>
        </nav>
        {{ $slot }}
    </section>
</body>
</html>
