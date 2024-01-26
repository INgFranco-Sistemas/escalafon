<x-app-layout>
    <x-slot name="header">
        {{-- <button type="button" class="btn btn-danger" wire:click="$emitTo('crear-estudios', 'display-modal')">
            Agregar Estudio
        </button> --}}

        <x-nav-link :href="route('capacitaciones.create', $trabajadore->id)">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('+ Nueva Capacitación') }}</h2>
        </x-nav-link>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 text-gray-900 md:flex md:justify-center text-2xl">
                    <h1><strong>Agregar Nueva Capacitacion</strong>

                    </h1>
                </div>

                <div- class="md:flex md:justify-center p-5">
                    <livewire:crear-capacitaciones :trabajadore="$trabajadore"/>
                </div->
            </div>
        </div>
    </div>
</x-app-layout>
