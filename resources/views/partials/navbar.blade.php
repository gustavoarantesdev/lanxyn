<header class="flex h-16 shrink-0 items-center justify-end border-b border-slate-300 bg-white px-4">
    <div class="items-items flex gap-4">
        <a
            class="my-transition text-slate-400 hover:text-red-500"
            href="{{ route('logout') }}"
            title="Sair do Sistema"
        >
            <x-icons.log-out />
        </a>
    </div>
</header>
