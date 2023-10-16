@extends('layouts.app')
@section('title','cart')
@section('body')
<div class=" m-2 p-3 rounded bg-white shadow-lg flex flex-col gap-4">
    <h3>Cart Item</h3>
    @for ($i = 0; $i < 10; $i++)
        
    <div class="orderlist w-full flex gap-2  p-2 rounded">
        <img class="w-24 h-24 border rounded" src="" alt="" srcset="">
        <div class="desc flex-1">
            <div class="flex justify-between">
                <h2>title</h2>
                <ion-icon name="ellipsis-vertical-outline"></ion-icon>
            </div>
            <p>status</p>
            <p>
                quantity
            </p>
            <div class="float-right">total</div>
        </div>
    </div>
    @endfor
</div>
<div class="sticky bottom-0 left-0">
    <div class="bg-white shadow-lg border flex justify-between items-center p-2">
        <h3>Rp. 100.0000</h3>
        <button class="p-2 border bg-orange-300 text-white rounded-lg">Checkout</button>
    </div>
</div>
@endsection