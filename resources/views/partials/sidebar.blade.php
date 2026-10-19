<aside class="flex h-full w-64 flex-col overflow-y-auto border-r border-slate-300 bg-white">
    {{-- Logo --}}
    <div class="flex h-16 shrink-0 items-center justify-center">
        <a href="{{ route('dashboard') }}">
            <x-lanxyn-logo />
        </a>
    </div>

    <hr class="mx-auto w-56 border-slate-300">

    {{-- Links --}}
    <nav class="flex-1 p-4">
        <ul class="mx-auto space-y-4">
            {{-- Dashboard --}}
            <li>
                <x-sidebar-link
                    href="{{ route('dashboard') }}"
                    route="dashboard"
                >
                    <x-icons.package-plus />
                    Dashboard
                </x-sidebar-link>
            </li>

            {{-- Estoque --}}
            <p class="mb-2 text-sm font-medium text-slate-500">Estoque</p>
            {{-- Entrada --}}
            <li>
                <x-sidebar-link
                    href="{{ route('stock.create') }}"
                    route="stock.create"
                >
                    <x-icons.package-plus />
                    Entrada
                </x-sidebar-link>
            </li>

            {{-- Saída --}}
            <li>
                <x-sidebar-link
                    href="{{ route('stock.out-create') }}"
                    route="stock.out-create"
                >
                    <x-icons.package-minus />
                    Saída
                </x-sidebar-link>
            </li>

            {{-- Relatório --}}
            <li>
                <x-sidebar-link
                    href="{{ route('stock.index') }}"
                    route="stock.index"
                >
                    <x-icons.file-box />
                    Relatório
                </x-sidebar-link>
            </li>


            {{-- Produto --}}
            <p class="mb-2 text-sm font-medium text-slate-500">Produto</p>
            {{-- Cadastrar --}}
            <li>
                <x-sidebar-link
                    href="{{ route('product.create') }}"
                    route="product.create"
                >
                    <x-icons.plus />
                    Cadastrar
                </x-sidebar-link>
            </li>
            {{-- Relatório --}}
            <li>
                <x-sidebar-link
                    href="{{ route('product.index') }}"
                    route="product.index"
                >
                    <x-icons.file-chart-column />
                    Relatório
                </x-sidebar-link>
            </li>

            <p class="mb-2 text-sm font-medium text-slate-500">Caixa Diário</p>
            <li>
                <x-sidebar-link
                    href="{{ route('cash.create') }}"
                    route="cash.create"
                >
                    <x-icons.plus />
                    Abertura
                </x-sidebar-link>
            </li>

            <p class="mb-2 text-sm font-medium text-slate-500">Venda</p>
            <li>
                <x-sidebar-link
                    href="{{ route('sale.create') }}"
                    route="sale.create"
                >
                    <x-icons.plus />
                    Cadastrar
                </x-sidebar-link>
            </li>
        </ul>
    </nav>
</aside>
