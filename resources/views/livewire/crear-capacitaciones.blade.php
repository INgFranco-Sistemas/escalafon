<form class="md:w-1/2 space-y-5" wire:submit.prevent='CrearCapacitacion'>
    <!-- Convocatoria -->
    <div>
        <x-input-label for="lugarcapatacion" :value="__('Lugar de Capacitacion')" />
        <input
            id="lugarcapatacion"
            class="block mt-1 w-full"
            type="text"
            wire:model="lugarcapatacion"
            value="old('lugarcapatacion')"
            placeholder="Lugar de Capacitacion"
        />

        @error('lugarcapatacion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="temacapacitacion" :value="__('Tema de capacitacion')" />
        <input
            id="temacapacitacion"
            class="block mt-1 w-full"
            type="text"
            wire:model="temacapacitacion"
            value="old('temacapacitacion')"
            placeholder="Capacitacion"
        />

        @error('temacapacitacion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- Fecha de inscripción -->
    <div class="flex gap-5 mt-5">
        <div class="md:w-1/2">
            <x-input-label for="capacitacionfecha_inicio" :value="__('Fecha Inicio')" />
            <x-text-input
                id="capacitacionfecha_inicio"
                class="block mt-1 w-full"
                type="date"
                wire:model="capacitacionfecha_inicio"
                :value="old('capacitacionfecha_inicio')"
            />

            @error('capacitacionfecha_inicio')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="md:w-1/2">
            <x-input-label for="capacitacionfecha_fin" :value="__('Fecha Fin')" />
            <x-text-input
                id="capacitacionfecha_fin"
                class="block mt-1 w-full"
                type="date"
                wire:model="capacitacionfecha_fin"
                :value="old('capacitacionfecha_fin')"
            />

            @error('capacitacionfecha_fin')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <!-- Bases -->
    <div>
        <x-input-label for="archivocapacitacion" :value="__('Agregar Archivo de la Capacitacion')" />
        <x-text-input
            id="archivocapacitacion"
            class="block mt-1 w-full"
            type="file"
            wire:model="archivocapacitacion"
            accept=".pdf"
        />

        @error('archivocapacitacion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button class="w-full justify-center mt-5">
        Crear Convocatoria
    </x-primary-button>
</form>
