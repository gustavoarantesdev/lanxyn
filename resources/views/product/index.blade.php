@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-between pr-4">
        <h1 class="px-6 py-4 text-xl font-semibold text-slate-700">Relatório de Produtos</h1>
    </div>

    <hr class="border-slate-300">

    <div class="border-slate 300">
        <div class="space-y-4 px-6 py-4">
            <div class="overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                <table class="w-full text-left text-sm">
                    <thead class="rounded-xl border-b border-slate-300 bg-slate-50 text-sm text-slate-500">
                        <tr>
                            <th class="px-6 py-3 font-medium">#</th>
                            <th class="px-6 py-3 font-medium">Nome</th>
                            <th class="px-6 py-3 font-medium">Preço de venda</th>
                            <th class="px-6 py-3 font-medium">Em estoque</th>
                            <th class="px-6 py-3 font-medium">Qtd. Mínima</th>
                            <th class="px-6 py-3 font-medium">Qtd. Máxima</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach ($products as $product)
                            <tr class="font-medium text-slate-600 hover:bg-slate-50">
                                <td class="px-6 py-4">{{ $product->id }}</td>
                                <td class="px-6 py-4">{{ $product->name }}</td>
                                <td class="px-6 py-4">R$ {{ $product->sell_price }}</td>
                                <td class="px-6 py-4">{{ $product->total_stock }}</td>
                                <td class="px-6 py-4">{{ $product->min_stock }}</td>
                                <td class="px-6 py-4">{{ $product->max_stock }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
