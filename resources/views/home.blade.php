@extends('layouts/main')

@section('title', 'Home')

@section('content')

<div>
    <form action="/" method="GET" class="flex w-96 relative mb-10">
        <div class="relative z-0 w-full">
            <input class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" id="search" placeholder="Digite a sua busca..." name="search" type="search">
        </div>
        <button type="submit" class="absolute right-0 bottom-0 h-max whitespace-nowrap text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesquisar</button>
    </form>
    @if(count($products) === 0 && $search)
    <div class="mb-10">
        <p class="text-lg">Buscando por: <span class="font-bold">{{ $search }}</span></p>
        <div class="mt-5">
            <p class="text-lg">Nenhum produto disponivel.</p>
            <a href="/" class="text-blue-500 hover:text-blue-800">Ver todos produtos</a>
        </div>
    </div>
    @elseif($search)
    <div class="mb-10">
        <p class="text-lg">Buscando por: <span class="font-bold">{{ $search }}</span></p>
    </div>
    @endif
</div>

<div class="grid grid-cols-3 gap-5">
    @foreach ($products as $product)
    <div class="flex overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <div class="w-1/3 bg-cover" style="background-image: url('/img/blogs/{{ $product->image }}')"></div>
        <div class="w-2/3 p-4 md:p-4 flex flex-col">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">{{ $product->name }}</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 mb-5">{{ $product->description }}</p>
            <div class="flex justify-between mt-3 item-center mt-auto">
                <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">R${{ $product->value }}</h1>
                <button class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Adicionar ao carrinho</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if(Session::has('msg'))
<div id="productCreated" class="fixed bottom-4 right-4 z-50">
    <div id="alert-border-3" class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-500 dark:bg-green-200" role="alert">
        <svg class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3 text-sm font-medium text-green-700">
            <p class="text-lg">{{Session::get('msg')}}</p>
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 dark:bg-green-200 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 dark:hover:bg-green-300 inline-flex h-8 w-8" data-dismiss-target="#alert-border-3" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</div>
@endif

@endsection

<script>
setTimeout(() => {
    document.getElementById('productCreated').remove();
}, "3000")
</script>

