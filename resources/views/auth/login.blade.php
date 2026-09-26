@extends('layouts.guest')

@section('content')
    <main class="flex min-h-dvh flex-col items-center justify-center">
        <div class="w-full rounded-xl border border-slate-300 bg-white shadow-md sm:max-w-md">
            {{-- Header --}}
            <div class="flex justify-center p-6 pb-0">
                <x-lanxyn-logo />
            </div>

            {{-- Content --}}
            <div class="p-6">
                <form
                    action="{{ route('login') }}"
                    method="post"
                >
                    @csrf

                    {{-- E-mail --}}
                    <div>
                        <label
                            class="mb-2 block font-medium text-slate-700"
                            for="email"
                        >
                            E-mail
                            <span class="text-red-500">*</span>
                        </label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            @class([
                                'my-input',
                                'my-input-error' => $errors->has('email'),
                                'my-input-success' => !$errors->has('email') && old('email'),
                            ])
                            autocomplete="email"
                            placeholder="Digite seu e-mail"
                            required
                            autofocus
                        />
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Senha --}}
                    <div class="mt-4">
                        <label
                            class="mb-2 block font-medium text-slate-700"
                            for="password"
                        >
                            Senha
                            <span class="text-red-500">*</span>
                        </label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            @class(['my-input', 'my-input-error' => $errors->has('password')])
                            autocomplete="current-password"
                            placeholder="Digite sua senha"
                            required
                        />
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        class="my-btn-primary mt-6"
                        type="submit"
                    >Acessar</button>
                </form>
            </div>
        </div>
    </main>
@endsection
