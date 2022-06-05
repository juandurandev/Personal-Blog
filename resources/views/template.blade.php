<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Blog</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4 ">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{asset('img/logo.png')}}" alt="" class="h-20">
                </a>
                <form action="{{ route('home')}}" method="GET" class="flex-grow px-2">
                    <input type="text" name="search" value="{{ request('search')}}" placeholder="Search" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                </form>
            </div>

            @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        </header>
        @yield('content')


        <div class="opacity-60 h-px mb-8" style="
    background:linear-gradient(to right,
        rgba(200,200,200,0) 0%,
        rgba(200,200,200,1) 30%,
        rgba(200,200,200,1) 70%,
        rgba(200,200,200,0) 100%

    );

    "></div>


        <p class="py-16 ">
            <img src="{{asset('img/logo.png')}}" alt="" class="h-12 mx-auto">
        </p>


    </div>






</body>

</html>
