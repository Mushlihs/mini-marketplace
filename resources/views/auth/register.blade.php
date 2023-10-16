@extends('layouts.app')
@section('title','register')
@section('body')
<div class="flex w-full h-[90vh] justify-center items-center">
    <div class="w-full max-w-md px-6 py-4 border bg-white rounded-lg shadow-lg">
        <h2 class="text-lg text-center mb-6">Mini <span class="text-orange-300">Marketplace</span></h2>
        <form action="#" method="post">
            @csrf
            <label class="block text-gray-500 mb-2"  for="name">Nama:</label>
            <input class="mb-4 border-2 border-l-4 p-2 w-full" type="text" name="name" id="name">
            <label class="block text-gray-500 mb-2"  for="email">Email:</label>
            <input class="mb-4 border-2 border-l-4 p-2 w-full" type="text" name="email" id="email">

            <label class="block text-gray-500 mb-2" for="password">Password:</label>
            <input class="mb-6 border-2 border-l-4 p-2 w-full" type="password" name="password" id="password">
            <label class="block text-gray-500 mb-2" for="password">Konfirmasi Password:</label>
            <input class="mb-6 border-2 border-l-4 p-2 w-full" type="password" name="password" id="password">
    
            <a class="text-gray-400" href="{{route("login")}}">Sudah punya akun?</a>
            <button class="block border text-white bg-orange-300 p-2 rounded-lg float-right" type="submit">Masuk</button>
        </form>
    </div>
</div>

@endsection