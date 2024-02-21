<div class="p-2">
    <div class="mb-2">
        <div class="md:grid md:grid-cols-3">
            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">DNI:
                <span class="normal-case font-normal">{{ $trabajadore->dni }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">RUC:
                <span class="normal-case font-normal">{{ $trabajadore->ruc }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Sexo:
                <span class="normal-case font-normal">{{ $trabajadore->sexo }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">F. Nacimiento:
                <span class="normal-case font-normal">{{ $trabajadore->nacimiento }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Fijo:
                <span class="normal-case font-normal">{{ $trabajadore->fijo }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Celular:
                <span class="normal-case font-normal">{{ $trabajadore->celular }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Pais:
                <span class="normal-case font-normal">{{ $trabajadore->nacionalidad }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Departamento:
                <span class="normal-case font-normal">{{ $trabajadore->departamento }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Provincia:
                <span class="normal-case font-normal">{{ $trabajadore->provincia }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Distrito:
                <span class="normal-case font-normal">{{ $trabajadore->distrito }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Estado Civil:
                <span class="normal-case font-normal">{{ $trabajadore->estadocivil }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Dirección:
                <span class="normal-case font-normal">{{ $trabajadore->direccion }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Correo:
                <span class="normal-case font-normal">{{ $trabajadore->correo }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Oficina o Area:
                <span class="normal-case font-normal">{{ $trabajadore->oficina->oficina }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3 text-center">Regimen:
                <span class="normal-case font-normal">{{ $trabajadore->regimen }}</span>
            </p>
        </div>
    </div>
</div>

<div class="p-2">
    <div class="mb-5">
        <div class="md:grid md:grid-cols-5 p-2">
            {{-- <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="{{ route('estudios.index', $trabajadore->id) }}"
                    class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >{{ $trabajadore->estudio->count() }} estudios</a>
            </div> --}}

            {{-- <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="#"
                    class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >t. de servicios</a>
            </div> --}}

            {{-- <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="{{ route('experiencias.index', $trabajadore->id) }}"
                    class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >{{ $trabajadore->experiencia->count() }} Experiencias</a>
            </div> --}}

            {{-- <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="#"
                class="bg-yellow-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >rendimiento l.</a>
            </div> --}}

            {{-- <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="{{ route('capacitaciones.index', $trabajadore->id) }}"
                    class="bg-yellow-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >{{ $trabajadore->capacitacion->count() }} Capacitaciones</a>
            </div> --}}
        </div>

        {{-- <div class="md:grid md:grid-cols-5 columns-2 p-2">
            <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="#"
                    class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >licencias</a>
            </div>

            <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="#"
                    class="bg-yellow-300 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >Meritos y demeritos</a>
            </div>

            <div class="text-center flex flex-col md:float-center items-stretch gap-3 mt-5 md:mt-0">
                <a
                    href="#"
                    class="bg-lime-300 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                >Proy. desarrollados</a>
            </div>
        </div> --}}
    </div>
</div>
