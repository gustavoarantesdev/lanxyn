@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-between pr-4">
        <h1 class="px-6 py-4 text-xl font-semibold text-slate-700">Cadastrar Produto</h1>
    </div>

    <hr class="border-slate-300">

    <form
        class="space-y-4 px-6 py-4"
        action="{{ route('product.create') }}"
        method="post"
    >
        @csrf

        <div class="flex w-full space-x-6">
            {{-- Categoria --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="category"
                >
                    Categoria
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <select
                        class="my-input appearance-none"
                        id="category"
                        name="category_id"
                        required
                    >
                        <option
                            value=""
                            hidden
                        >Selecione...</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                    <x-icons.chevrons-up-down
                        class="pointer-events-none absolute right-2 top-1/2 flex -translate-y-1/2 items-center text-slate-500"
                    />
                </div>
            </div>

            {{-- Nome --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="name"
                >
                    Nome
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="name"
                    name="name"
                    type="string"
                    placeholder="Digite o nome do produto"
                    required
                />
            </div>
        </div>

        <div class="flex w-full space-x-6">
            {{-- Preço de venda --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="sell_price"
                >
                    Preço de venda
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="sell_price"
                    name="sell_price"
                    type="string"
                    placeholder="Digite o preço de venda"
                    required
                />
            </div>

            {{-- Quantidade mínima --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="min_stock"
                >
                    Quantidade Mínima
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="min_stock"
                    name="min_stock"
                    type="string"
                    placeholder="Digite a quantidade mínima no estoque"
                    required
                />
            </div>

            {{-- Quantidade máxima --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="max_stock"
                >
                    Quantidade Máxima
                </label>
                <input
                    class="my-input"
                    id="max_stock"
                    name="max_stock"
                    type="string"
                    placeholder="Digite a quantidade máxima no estoque"
                    required
                />
            </div>
        </div>

        {{-- Local do Produto --}}
        <div class="w-full">
            <label
                class="mb-2 block font-medium text-slate-700"
                for="description"
            >
                Descrição
            </label>
            <textarea
                class="my-input"
                id="description"
                name="description"
                placeholder="Digite a descrição do produto"
            ></textarea>
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
