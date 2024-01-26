<x-app-layout>
    <x-slot name="header">
        <div>
            <x-nav-link :href="route('trabajadores.create')">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('+ Nuevo Personal') }}</h2>
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            @if(session()->has('mensaje'))
                <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                    {{session('mensaje')}}
                </div>
            @endif

            <livewire:mostrar-personal />
        </div>
    </div>
</x-app-layout>
