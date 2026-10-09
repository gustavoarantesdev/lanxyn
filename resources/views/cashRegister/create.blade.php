@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-between pr-4">
        <h1 class="px-6 py-4 text-xl font-semibold text-slate-700">Cadastrar Abertura de Caixa</h1>
    </div>

    <hr class="border-slate-300">

    <form
        class="space-y-4 px-6 py-4"
        action="{{ route('cash.create') }}"
        method="post"
    >
        @csrf

        <div class="flex w-full space-x-6">
            {{-- Date e hora --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="opened_at"
                >
                    Data e Hora
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="opened_at"
                    name="opened_at"
                    type="datetime-local"
                    required
                />
            </div>

            {{-- Valor --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="opening_amount"
                >
                    Valor
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="opening_amount"
                    name="opening_amount"
                    type="string"
                    placeholder="Digite a o valor da abertura"
                    required
                />
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
