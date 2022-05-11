@extends('layouts/main')

@section('title', 'Meus Produtos')

@section('content')


<div class="container">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome do produto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Preço (R$)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descrição
                    </th>
                    <th scope="col" class="w-1 px-6 py-3">
                        <span class="sr-only">Editar e remover</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Sliver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex gap-8">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Remover</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection