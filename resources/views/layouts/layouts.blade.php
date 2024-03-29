<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    {{-- plugin tailwindcss --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- fontawesome puglin --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />


</head>
<body>
    <header class="bg-slate-100 text-black uppercase">
        <nav class="p-4 flex items-center justify-between">
            <ul class="flex items-center justify-center">
                <li class="mr-auto p-4">
                    <a href="/" class="text-2xl font-bold">My Blog</a>
                </li>
                <li class="px-4">
                    <a href="{{route('destination')}}">destination</a>
                </li>
                <li class="px-4">
                    <a href="{{route('food')}}">food</a>
                </li>
                <li class="px-4">
                    <a href="{{route('sport')}}">sport</a>
                </li>
                <li class="px-4">
                    <a href="{{route('lifestyle')}}">lifestyle</a>
                </li>
            </ul>
            <ul class="flex items-center justify-center">
                @if (auth()->user())
                <li class="px-4">
                    <a href="">{{ auth()->user()->name}}</a>
                </li>
                <li class="px-4 m-4 hover:bg-red-500  hover:text-white">
                    <a href="{{ route('logout') }}">Logout</a>
                </li>
                @endauth
                
                @guest
                <li class="px-4">
                    <a href="{{ route('login')}}">Login</a>
                </li>
                <li class="px-4">
                    <a href="{{ route('register')}}">Register</a>
                </li>
                @endguest
            </ul>
        </nav>
    </header>
    <div class="min-h-[80vh]">
        @yield('content')
    </div>
    
    <footer class="bg-slate-800">
        <h1>Footer</h1>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>