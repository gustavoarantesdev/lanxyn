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
                <a
                    href="{{ route('dashboard') }}"
                    @class([
                        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
                        'bg-amber-100 text-amber-600' => request()->routeIs('dashboard'),
                        'bg-slate-100 text-slate-700' => !request()->routeIs('dashboard'),
                    ])
                >
                    <x-icons.house />
                    Dashboard
                </a>
            </li>

            {{-- Estoque --}}
            <p class="mb-2 text-sm font-medium text-slate-500">Estoque</p>
            {{-- Entrada --}}
            <li>
                <a
                    href="{{ route('stock.create') }}"
                    @class([
                        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
                        'bg-amber-100 text-amber-600' => request()->routeIs('stock.create'),
                        'bg-slate-100 text-slate-700' => !request()->routeIs('stock.create'),
                    ])
                >
                    <x-icons.package-plus />
                    Entrada
                </a>
            </li>

            {{-- Saída --}}
            <li>
                <a
                    href="{{ route('stock.out-create') }}"
                    @class([
                        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
                        'bg-amber-100 text-amber-600' => request()->routeIs('stock.out-create'),
                        'bg-slate-100 text-slate-700' => !request()->routeIs('stock.out-create'),
                    ])
                >
                    <x-icons.package-minus />
                    Saída
                </a>
            </li>

            {{-- Relatório --}}
            <li>
                <a
                    href="{{ route('stock.index') }}"
                    @class([
                        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
                        'bg-amber-100 text-amber-600' => request()->routeIs('stock.index'),
                        'bg-slate-100 text-slate-700' => !request()->routeIs('stock.index'),
                    ])
                >
                    <x-icons.file-box />
                    Relatório
                </a>
            </li>


            {{-- Produto --}}
            <p class="mb-2 text-sm font-medium text-slate-500">Produto</p>
            {{-- Cadastrar --}}
            <li>
                <a
                    href="{{ route('product.create') }}"
                    @class([
                        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
                        'bg-amber-100 text-amber-600' => request()->routeIs('product.create'),
                        'bg-slate-100 text-slate-700' => !request()->routeIs('product.create'),
                    ])
                >
                    <x-icons.plus />
                    Cadastrar
                </a>
            </li>
            {{-- Relatório --}}
            <li>
                <a
                    href="{{ route('product.index') }}"
                    @class([
                        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
                        'bg-amber-100 text-amber-600' => request()->routeIs('product.index'),
                        'bg-slate-100 text-slate-700' => !request()->routeIs('product.index'),
                    ])
                >
                    <x-icons.file-chart-column />
                    Relatório
                </a>
            </li>

            <p class="mb-2 text-sm font-medium text-slate-500">Caixa Diário</p>
            <li>
                <a
                    href="{{ route('cash.create') }}"
                    @class([
                        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
                        'bg-amber-100 text-amber-600' => request()->routeIs('cash.create'),
                        'bg-slate-100 text-slate-700' => !request()->routeIs('cash.create'),
                    ])
                >
                    <x-icons.plus />
                    Abertura
                </a>
            </li>

        </ul>
    </nav>
</aside>
