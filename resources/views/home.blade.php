@extends('layouts.app')
@section('title','homepage')
@section('body')
<div class="s1 relative h-[30vh] bg-gray-500 m-3 rounded-lg shadow-lg md:h-[60vh]">
    {{-- <div class="absolute left-2 top-1/2 rounded-full bg-red-300 w-4 h-20 z-10"></div> --}}
</div>

<div class="search flex justify-between items-center gap-2 mt-6 mb-3 px-3">

    <p class="text-lg">Semua produk</p>
    <input class="rounded-full max-w-xs border-2 border-b-4 px-4 py-2" type="text" placeholder="Cari...">
</div>
<div class="grid grid-cols-2 gap-4 px-3 md:grid-cols-4">
    @foreach ($product as $item)
    <a href="{{route("product",["slug"=>$item->slug])}}">

        <div class="border rounded-lg shadow-lg">
            <img class="rounded-t-lg w-full object-cover" src="{{$item->image}}" alt="" srcset="">
            <div class="desc px-3 pb-3">
                <p class="mt-2">{{$item->name}}</p>
                <p class="text-sm font-bold">Rp. {{$item->price}}</p>
                <div class="text-gray-400 text-sm flex justify-between mt-2">
                    <p>
                        @if ($item->stock > 0)
                            Tersedia
                        @else
                            Habis
                        @endif
                    </p> 
                    <p>
                    Stok {{$item->stock}}
                    </p>
                </div>
            </div>
        </div>
    </a>

    @endforeach
</div>

<div class="my-4 mx-4">

    {{ $product->links() }}
</div>
@endsection