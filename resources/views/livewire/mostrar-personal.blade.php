<div>
    <livewire:filtrar-trabajadores />

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <h3 class="font-extrabold text-4xl text-gray-700 mb-12">Personal del Gobierno Regional Huánuco</h3>

        @forelse ($empleados as $empleado)
            <div class="p-2 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="leading-10">
                    <a href="#" class="text-lg font-bold">
                        {{ $empleado->apellidos }}, {{ $empleado->nombres }}
                    </a>
                </div>
                <div class="leading-10">
                    <a href="#" class="text-lg font-bold">
                        {{ $empleado->oficina->oficina }}
                    </a>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a
                        href="{{ route('trabajadores.show', $empleado->id) }}"
                        class="bg-orange-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >datos</a>

                    <a
                        href="{{ route('trabajadores.edit', $empleado->id) }}"
                        class="bg-blue-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >Editar</a>

                    {{-- <button
                        wire:click="$emit('mostrarAlerta', {{ $empleado->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >Eliminar</button> --}}
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay empleados aún</p>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $empleados->links() }}
    </div>
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('mostrarAlerta', vacanteId => {
            Swal.fire({
                title: '¿Eleminar Personal?',
                text: "Un Personal eliminado no se podra recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    //eliminando el personal
                    Livewire.emit('eliminarVacante', vacanteId)

                    Swal.fire(
                        'Personal eliminado!',
                        'Eliminado Correctamente.',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
