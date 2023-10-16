@extends('layouts.app')
@section('title','order')
@section('body')



<img class="h-[50vh] w-full object-cover" src="{{$res->image}}" alt="" srcset="">
<div class="item mx-2">
    
    <p>{{$res->name}}</p>
    <div class="flex justify-between">
    
        <p>Rp. {{$res->price}}</p>
        <p>Stock {{$res->stock}}</p>
    </div>
    <p>{{$res->description}}</p>
</div>
<div class="absolute bottom-0 right-0">
    <div class="bg-white shadow-lg border w-screen flex justify-between p-2">
        <div class="flex items-center">
            <p class="border rounded-l-lg px-2">+</p>
            <input class="w-10 text-center border" type="text" placeholder="1">
            <p class="border rounded-r-lg px-2">-</p>
        </div>

        <a href="{{route("cart")}}"  class="p-2 border bg-orange-300 text-white rounded-lg">Add to cart</a>
    </div>
</div>

@endsection