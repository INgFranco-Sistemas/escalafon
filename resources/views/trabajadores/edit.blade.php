<x-app-layout>
    <x-slot name="header">
        <div>
            <x-nav-link :href="route('trabajadores.create')">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('+ Editar Campos') }}</h2>
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-4xl font-bold text-center mb-10">Editar Personal: {{ $trabajadore->apellidos }}, {{ $trabajadore->nombres }}</h1>

                    <div- class="md:flex md:justify-center p-5">
                        <livewire:editar-vacante
                            :trabajadore="$trabajadore"
                        />
                    </div->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
