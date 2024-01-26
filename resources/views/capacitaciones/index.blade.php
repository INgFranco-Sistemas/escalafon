<x-app-layout>
    <x-slot name="header">
        {{-- <button type="button" class="btn btn-danger" wire:click="$emitTo('crear-estudios', 'display-modal')">
            Agregar Estudio
        </button> --}}

        <x-nav-link :href="route('capacitaciones.create', $trabajadore->id)">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('+ Nueva Capacitacion') }}</h2>
        </x-nav-link>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-1 text-gray-900 md:flex md:justify-center text-2xl">
                    <h1><strong>Capacitaciones del personal: </strong> {{ $trabajadore->apellidos }}, {{ $trabajadore->nombres }}</h1>
                </div>

                @if(session()->has('mensaje'))
                <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                    {{session('mensaje')}}
                </div>
            @endif

            <div class="md:flex md:justify-center p-5">
                <ul class="divide-y divide-gray-200 w-3/4">
                    @forelse ($trabajadore->capacitacion as $capacita)
                        <li class="p-0 flex items-center">
                            <div class="flex-1">
                                    <p class="text-xl font-medium text-gray-800">{{$capacita->lugarcapatacion}}</p>
                                    <p class="text-sm text-gray-600">{{$capacita->temacapacitacion}}</p>
                            </div>

                            <div>
                                <a
                                    class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-green-500"
                                    href="{{ asset('storage/archivocapacitacion/' . $capacita->archivocapacitacion) }}"
                                    target="_blank"
                                    rel="noreferrer noopener"
                                >
                                    Ver Archivo
                                </a>
                            </div>
                        </li>
                    @empty
                        <p class="p-3 text-center text-sm text-gray-600">No hay ninguna capacitación aun</p>
                    @endforelse
                </ul>
            </div>

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:mostrar-empleado
                :trabajadore="$trabajadore"
                />
            </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
