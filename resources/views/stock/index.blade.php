@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-between pr-4">
        <h1 class="px-6 py-4 text-xl font-semibold text-slate-700">Relatório do Estoque</h1>
    </div>

    <hr class="border-slate-300">

    <div class="border-slate 300">
        <div class="space-y-4 px-6 py-4">
            <div class="overflow-hidden rounded-xl border border-slate-300 bg-white shadow-sm">
                <table class="w-full text-left text-sm">
                    <thead class="rounded-xl border-b border-slate-300 bg-slate-50 text-sm text-slate-500">
                        <tr>
                            <th class="px-6 py-3 font-medium">Lote</th>
                            <th class="px-6 py-3 font-medium">Produto</th>
                            <th class="px-6 py-3 font-medium">Qtd. atual</th>
                            <th class="px-6 py-3 font-medium">Qtd. inicial</th>
                            <th class="px-6 py-3 font-medium">Data da compra</th>
                            <th class="px-6 py-3 font-medium">Validade</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        @foreach ($stockBatches as $stockBatch)
                            <tr class="font-medium text-slate-600 hover:bg-slate-50">
                                <td class="px-6 py-4">L{{ $stockBatch->id }}</td>
                                <td class="px-6 py-4">{{ $stockBatch->product->name }}</td>
                                <td class="px-6 py-4">{{ $stockBatch->remaining_quantity }}</td>
                                <td class="px-6 py-4">{{ $stockBatch->initial_quantity }}</td>
                                <td class="px-6 py-4">{{ $stockBatch->purchase_date }}</td>
                                <td class="px-6 py-4">{{ $stockBatch->expiration_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
