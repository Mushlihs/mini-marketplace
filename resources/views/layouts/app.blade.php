<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{asset("css/index.css")}}"> --}}
    <title>@yield('title')</title>
</head>
<body>
    <div class="nav w-full flex justify-between items-center bg-white shadow-2xl px-2 py-3">
        <a href="{{route("home")}}">
            <h2 class="text-lg">Mini <span class="text-orange-300">Marketplace</span></h2>
        </a>
    @if (Auth::check())
        Hi {{auth()->user()->username()}}
        <div class="flex gap-2">
            <a href="{{route("cart")}}">
                <div class="w-20 h-12 rounded-full border gap-2 flex items-center justify-center cursor-pointer"> 
                    <ion-icon  name="cart-outline"></ion-icon>
                    <p class="bg-red-400 rounded-lg px-2 py-1 text-xs"> 22</p>
                </div>
            </a>
            <a href="{{route("account")}}">
                <div class="w-12 h-12 rounded-full border flex items-center justify-center cursor-pointer hover:bg-red-200"> 
                    <ion-icon name="person-outline"> </ion-icon>
                </div>
            </a>
        </div>
        @else
        <div class="auth">
            <a href="{{route("login")}}" class="text-sm rounded px-3 py-2 border hover:bg-orange-200">Login</a>
            <a href="{{route("register")}}" class="text-sm rounded px-3 py-2 border hover:bg-orange-200">Register</a>
        </div>

    @endif    
    </div>
    
    @yield('body')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>