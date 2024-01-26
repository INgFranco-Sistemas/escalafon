<div class="bg-gray-100">
    <h2 class="text-2xl md:text-4xl text-indigo-600 text-center font-extrabold my-5">Buscar y Filtrar Personal</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent='leerDatosFormulario'>
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">Personal
                    </label>
                    <input
                        id="termino"
                        type="text"
                        placeholder="Buscar por Término: ej. García"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model='termino'
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Oficina</label>
                    <select wire:model='oficina' class="border-gray-300 p-2 w-full">
                        <option>-- Seleccione --</option>
                        @foreach ($oficinas as $of)
                            <option value="{{ $of->id }}">{{$of->oficina}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Regimen</label>
                    <select wire:model='regimen' class="border-gray-300 p-2 w-full">
                        <option value="0">-- Seleccione --</option>
                        <option value="1057">1057</option>
                        <option value="728">728</option>
                        <option  value="276">276</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input
                    type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
            <br>
        </form>
    </div>
</div>
