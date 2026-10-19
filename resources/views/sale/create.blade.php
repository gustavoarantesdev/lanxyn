@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="flex items-center justify-between pr-4">
        <h1 class="px-6 py-4 text-xl font-semibold text-slate-700">Cadastrar Venda</h1>
    </div>

    <hr class="border-slate-300">

    <form
        class="space-y-4 px-6 py-4"
        action="{{ route('sale.create') }}"
        method="post"
    >
        @csrf

        <div class="flex w-full space-x-6">
            {{-- Caixa diário --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="cash_register_id"
                >
                    Caixa diário
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="cash_register_id"
                    name="cash_register_id"
                    type="text"
                    value="{{ $cashRegister->opened_at }}"
                    disabled
                >
            </div>

            {{-- Tipo da venda --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="sale_channel"
                >
                    Tipo de Venda
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <select
                        class="my-input appearance-none"
                        id="sale_channel"
                        name="sale_channel"
                        required
                    >
                        <option value="true">Venda Balcão</option>
                        <option value="false">Encomenda</option>
                    </select>
                    <x-icons.chevrons-up-down
                        class="pointer-events-none absolute right-2 top-1/2 flex -translate-y-1/2 items-center text-slate-500"
                    />
                </div>
            </div>

            {{-- Data da venda --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="sold_at"
                >
                    Data e hora da venda
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="sold_at"
                    name="sold_at"
                    type="datetime-local"
                    x-data="{ today: new Date().toLocaleString('sv-SE', { timeZone: 'America/Sao_Paulo' }).replace(' ', 'T').slice(0, 16) }"
                    x-model="today"
                    required
                />
            </div>
        </div>

        <div
            class="flex w-full space-x-6"
            x-data="{ productId: '', price: '', quantity: '', amount: '' }"
            x-effect="amount = (parseFloat(price) || 0) * (parseFloat(quantity) || 0) || ''"
        >
            {{-- Produto --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="product_id"
                >
                    Produto
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <select
                        class="my-input appearance-none"
                        id="product_id"
                        name="product_id"
                        x-model="productId"
                        @change="price = $event.target.selectedOptions[0].dataset.price || '', quantity=1"
                        required
                    >
                        <option
                            value=""
                            hidden
                        >Selecione...</option>
                        @foreach ($products as $product)
                            <option
                                data-price="{{ $product->sell_price }}"
                                value="{{ $product->id }}"
                            >{{ $product->name }}</option>
                        @endforeach
                    </select>
                    <x-icons.chevrons-up-down
                        class="pointer-events-none absolute right-2 top-1/2 flex -translate-y-1/2 items-center text-slate-500"
                    />
                </div>
            </div>

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
                    type="number"
                    x-model.number="quantity"
                    min="1"
                    placeholder="Digite a quantidade"
                    required
                />
            </div>

            {{-- Preço da unidade --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="sell_price"
                >
                    Preço da unidade
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="sell_price"
                    name="sell_price"
                    type="number"
                    step="0.01"
                    x-model.number="price"
                    placeholder="Digite o preço de venda"
                    required
                />
            </div>

            {{-- Valor total --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="amount"
                >
                    Valor total
                    <span class="text-red-500">*</span>
                </label>
                <input
                    class="my-input"
                    id="amount"
                    name="amount"
                    x-model="amount"
                    readonly
                />
            </div>
        </div>


        <div class="flex w-full space-x-6">
            {{-- Forma de pagamento --}}
            <div class="w-full">
                <label
                    class="mb-2 block font-medium text-slate-700"
                    for="payment_method"
                >
                    Forma de pagamento
                    <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <select
                        class="my-input appearance-none"
                        id="payment_method"
                        name="payment_method"
                        required
                    >
                        <option
                            value=""
                            hidden
                        >Selecione...</option>
                        @foreach ($paymentMethods as $paymentMethod)
                            <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->name }}</option>
                        @endforeach
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
