@props(['href', 'route'])

<a
    href="{{ $href }}"
    @class([
        'my-transition flex items-center gap-2 rounded-xl p-4 text-sm font-medium hover:bg-amber-100 hover:text-amber-600',
        'bg-amber-100 text-amber-600' => request()->routeIs($route),
        'bg-slate-100 text-slate-700' => !request()->routeIs($route),
    ])
>
    {{ $slot }}
</a>
