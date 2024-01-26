<form class="md:w-1/2 space-y-5" wire:submit.prevent='CrearEstudios'>
    <!-- Convocatoria -->
    <div>
        <x-input-label for="centroestudios" :value="__('Centro de Estudios')" />
        <input
            id="centroestudios"
            class="block mt-1 w-full"
            type="text"
            wire:model="centroestudios"
            value="old('centroestudios')"
            placeholder="Centro de Estudios"
        />

        @error('centroestudios')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- Fecha de inscripción -->
    <div class="flex gap-5 mt-5">
        <div class="md:w-3/4">
            <x-input-label for="tipoestudio" :value="__('Tipo de Estudios')" />
            <select
                id="tipoestudio"
                wire:model="tipoestudio"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-1"
            >
                <option value="">-- Seleccione --</option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Auxiliar Técnico">Auxiliar Técnico</option>
                <option value="Técnico">Técnico</option>
                <option value="Egresado">Egresado</option>
                <option value="Bachiller">Bachiller</option>
                <option value="Titulo Porfesional">Titulo Porfesional</option>
                <option value="Maestria">Maestria</option>
                <option value="Doctorado">Doctorado</option>
            </select>

            @error('tipoestudio')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="md:w-1/2">
            <x-input-label for="fecha_inicio" :value="__('Fecha Inicio')" />
            <x-text-input
                id="fecha_inicio"
                class="block mt-1 w-full"
                type="date"
                wire:model="fecha_inicio"
                :value="old('fecha_inicio')"
            />

            @error('fecha_inicio')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="md:w-1/2">
            <x-input-label for="fecha_fin" :value="__('Fecha Fin')" />
            <x-text-input
                id="fecha_fin"
                class="block mt-1 w-full"
                type="date"
                wire:model="fecha_fin"
                :value="old('fecha_fin')"
            />

            @error('fecha_fin')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <!-- Bases -->
    <div>
        <x-input-label for="archivoestudio" :value="__('Agregar Archivo del Estudio')" />
        <x-text-input
            id="archivoestudio"
            class="block mt-1 w-full"
            type="file"
            wire:model="archivoestudio"
            accept=".pdf"
        />

        @error('archivoestudio')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button class="w-full justify-center mt-5">
        Crear Convocatoria
    </x-primary-button>
</form>
