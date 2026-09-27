@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-between pr-4">
        <h1 class="px-6 py-4 text-xl font-semibold text-slate-700">Entrada no Estoque</h1>
    </div>

    <hr class="border-slate-300">

    <form
        class="space-y-4 px-6 py-4"
        action="{{ route('stock.create') }}"
        method="post"
    >
        @csrf

        <div class="flex w-full space-x-6">
            {{-- Data de compra --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="purchase_date"
                >
                    Data da Compra
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="purchase_date"
                    name="purchase_date"
                    type="date"
                    placeholder="Informe a data de compra"
                    required
                />
            </div>

            {{-- Fornecedor --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="supplier"
                >
                    Fornecedor
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <select
                        class="my-input appearance-none"
                        id="supplier"
                        name="supplier_id"
                        required
                    >
                        <option
                            value=""
                            hidden
                        >Selecione...</option>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach
                    </select>
                    <x-icons.chevrons-up-down
                        class="pointer-events-none absolute right-2 top-1/2 flex -translate-y-1/2 items-center text-slate-500"
                    />
                </div>

                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
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
                    name="product_id"
                    required
                >
                    <option
                        value=""
                        hidden
                    >Selecione...</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                <x-icons.chevrons-up-down
                    class="pointer-events-none absolute right-2 top-1/2 flex -translate-y-1/2 items-center text-slate-500"
                />
            </div>
        </div>

        <div class="flex w-full space-x-6">
            {{-- Quantidade --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="quantity"
                >
                    Quantidade
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

            {{-- Data de vencimento --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="expiration_date"
                >
                    Data de Validade
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="expiration_date"
                    name="expiration_date"
                    type="date"
                    placeholder="Informe a data de validade"
                    required
                />
            </div>
        </div>

        {{-- Local do Produto --}}
        <div class="w-full">
            <label
                class="mb-2 block font-medium text-slate-700"
                for="location"
            >
                Local do Produto
                <span class="text-red-500">*</span>
            </label>
            <input
                class="my-input"
                id="location"
                name="location"
                type="string"
                placeholder="Digite o local onde está o produto"
                required
            />
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
