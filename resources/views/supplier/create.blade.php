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
            {{-- PJ ou PF --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="person_type"
                >
                    Tipo de Pessoa
                    <span class="text-red-500">*</span>
                </label>
                <div class="flex w-full space-x-6">
                    <div
                        class="flex w-full cursor-pointer items-center rounded-xl border border-slate-300 bg-slate-50 ps-4 shadow-sm transition duration-200 hover:border-amber-400">
                        <input
                            class="mr-3 h-4 w-4 appearance-none rounded-full border border-slate-300 bg-slate-50 text-slate-700 checked:border-2 checked:border-amber-500 checked:bg-amber-400 checked:ring-2 checked:ring-amber-500/50 focus:border-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500/50"
                            id="person_type_pj"
                            name="person_type"
                            type="radio"
                            value="PJ"
                        />
                        <label
                            class="w-full cursor-pointer select-none p-3 ps-0"
                            for="person_type_pj"
                        >PJ</label>
                    </div>

                    <div
                        class="flex w-full cursor-pointer items-center rounded-xl border border-slate-300 bg-slate-50 ps-4 shadow-sm transition duration-200 hover:border-amber-400">
                        <input
                            class="mr-3 h-4 w-4 appearance-none rounded-full border border-slate-300 bg-slate-50 text-slate-700 checked:border-2 checked:border-amber-500 checked:bg-amber-400 checked:ring-2 checked:ring-amber-500/50 focus:border-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500/50"
                            id="person_type_pf"
                            name="person_type"
                            type="radio"
                            value="PF"
                        />
                        <label
                            class="w-full cursor-pointer select-none p-3 ps-0"
                            for="person_type_pf"
                        >PF</label>
                    </div>
                </div>
            </div>

            {{-- Documento --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="document_number"
                >
                    Documento
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="document_number"
                    name="document_number"
                    type="string"
                    placeholder="Digite o documento"
                    required
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
