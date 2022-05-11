@extends('layouts/main')

@section('title', $product->name. ' - Detalhes')
@section('content')

<div class="container">
    <div class="flex gap-10">
        <div class="w-6/12">
            <img src="/img/blogs/{{ $product->image }}" alt="">
        </div>
        <div class="flex flex-col gap-5">
            <h2 class="text-5xl font-bold uppercase">{{ $product->name }}</h2>
            <p class="text-xl">{{ $product->description }}</p>
            <h3 class="text-2xl"><b>R$</b> {{ $product->value }}</h3>
            <h3 class="text-lg">Vendido e entregue por: {{ $productOwner->name }}</h3>
            <div class="mt-5">
                <a href="" class="text-white bg-blue-700 py-2 px-5 rounded-xl uppercase font-bold hover:bg-blue-500 transition-all">Comprar agora</a>
            </div>
        </div>

    </div>

</div>

@endsection