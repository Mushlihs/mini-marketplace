@extends('layouts.app')
@section('title','account')
@section('body')
    <div class="h-[40vh] flex flex-col justify-center items-center border m-2 shadow-lg">
        <img class="w-32 h-32 rounded-full border bg-white mb-2" src="#" alt="" srcset="">

        <h3 class="mb-3" >Username</h3>
        <form action="">
            <button class="border-red-500 border-2 border-b-4 bg-white rounded-full text-red-600 p-2 w-40 hover:bg-red-200 hover:scale-105 delay-100" type="submit"> Logout</button>
        </form>
    </div>
    <div class=" m-2 p-3 rounded bg-white shadow-lg flex flex-col gap-4">
        <h3>Order History</h3>
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
@endsection