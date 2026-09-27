@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-between pr-4">
        <h1 class="px-6 py-4 text-xl font-semibold text-slate-700">Saída no Estoque</h1>
    </div>

    <hr class="border-slate-300">

    <form
        class="space-y-4 px-6 py-4"
        action="{{ route('stock.out-create') }}"
        method="post"
    >
        @csrf

        <div class="flex w-full space-x-6">
            {{-- Data da Saída --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="movement_date"
                >
                    Data da Saída
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="movement_date"
                    name="movement_date"
                    type="date"
                    placeholder="Informe a data da saída"
                    required
                />
            </div>

            {{-- Produto --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="product"
                >
                    Produto
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <select
                        class="my-input appearance-none"
                        id="product"
                        name="batch_id"
                        required
                    >
                        <option
                            value=""
                            hidden
                        >Selecione...</option>
                        @foreach ($products as $product)
                            @foreach ($product->stockBatches as $stockBatch)
                                <option value="{{ $stockBatch->id }}">{{ $product->name }} - {{ $product->total_stock }}x em
                                    estoque
                                </option>
                            @endforeach
                        @endforeach
                    </select>
                    <x-icons.chevrons-up-down
                        class="pointer-events-none absolute right-2 top-1/2 flex -translate-y-1/2 items-center text-slate-500"
                    />
                </div>
            </div>
        </div>



        <div class="flex w-full space-x-6">
            {{-- Quantidade --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="quantity"
                >
                    Quantidade da Saída
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="quantity"
                    name="quantity"
                    type="string"
                    placeholder="Digite a quantidade"
                    required
                />
            </div>

            {{-- Motivo da saída --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="reason"
                >
                    Motivo da Saída
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <select
                        class="my-input appearance-none"
                        id="reason"
                        name="reason"
                        required
                    >
                        <option
                            value=""
                            hidden
                        >Selecione...</option>
                        <option value="sale">Venda</option>
                        <option value="loss">Perda/avaria</option>
                        <option value="production">Produção</option>
                        <option value="deterioration">Detoriação</option>
                        <option value="return_supplier">Devolução ao fornecedor</option>
                        <option value="discard">Descarte</option>
                    </select>
                    <x-icons.chevrons-up-down
                        class="pointer-events-none absolute right-2 top-1/2 flex -translate-y-1/2 items-center text-slate-500"
                    />
                </div>
            </div>
        </div>

        {{-- Botões do Form --}}
        <div class="mt-6 flex space-x-6">
            {{-- Cancelar --}}
            <div class="w-5xl">
                <button class="my-btn-light">
                    Cancelar
                </button>
            </div>

            {{-- Salvar --}}
            <button
                class="my-btn-success"
                type="submit"
            >
                Salvar
            </button>
        </div>
    </form>
@endsection
