<x-app-layout>
    <x-slot name="header">
        <div>
            <x-nav-link :href="route('trabajadores.create')">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    + Nuevo Personal
                </h2>
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 text-gray-900 md:flex md:justify-center text-2xl">
                <h1><strong>Personal: </strong> {{ $trabajadore->apellidos }}, {{ $trabajadore->nombres }}</h1>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:mostrar-empleado
                    :trabajadore="$trabajadore"
                />
            </div>

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:mostrar-menu
                    :trabajadore="$trabajadore"
                />
            </div> --}}
        </div>
    </div>
</x-app-layout>
