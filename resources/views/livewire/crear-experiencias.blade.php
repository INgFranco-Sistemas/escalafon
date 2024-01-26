<form class="md:w-1/2 space-y-5" wire:submit.prevent='CrearExperiencia'>
    <!-- Convocatoria -->
    <div>
        <x-input-label for="lugartrabajo" :value="__('Lugar de trabajo')" />
        <input
            id="lugartrabajo"
            class="block mt-1 w-full"
            type="text"
            wire:model="lugartrabajo"
            value="old('lugartrabajo')"
            placeholder="Lugar de Trabajo"
        />

        @error('lugartrabajo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="cargotrabajo" :value="__('Cargo')" />
        <input
            id="cargotrabajo"
            class="block mt-1 w-full"
            type="text"
            wire:model="cargotrabajo"
            value="old('cargotrabajo')"
            placeholder="Cargo"
        />

        @error('lugartrabajo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <!-- Fecha de inscripción -->
    <div class="flex gap-5 mt-5">
        <div class="md:w-1/2">
            <x-input-label for="cargofecha_inicio" :value="__('Fecha Inicio')" />
            <x-text-input
                id="cargofecha_inicio"
                class="block mt-1 w-full"
                type="date"
                wire:model="cargofecha_inicio"
                :value="old('cargofecha_inicio')"
            />

            @error('cargofecha_inicio')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <div class="md:w-1/2">
            <x-input-label for="cargofecha_fin" :value="__('Fecha Fin')" />
            <x-text-input
                id="cargofecha_fin"
                class="block mt-1 w-full"
                type="date"
                wire:model="cargofecha_fin"
                :value="old('cargofecha_fin')"
            />

            @error('cargofecha_fin')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>
    </div>

    <!-- Bases -->
    <div>
        <x-input-label for="archivoexperiencia" :value="__('Agregar Archivo de la Experiencia')" />
        <x-text-input
            id="archivoexperiencia"
            class="block mt-1 w-full"
            type="file"
            wire:model="archivoexperiencia"
            accept=".pdf"
        />

        @error('archivoexperiencia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-primary-button class="w-full justify-center mt-5">
        Crear Convocatoria
    </x-primary-button>
</form>
