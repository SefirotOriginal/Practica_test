@csrf
   <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded
            py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white "
            required type="text" placeholder="Programador" name="nombre" id="nombre" value="{{ old('nombre', $profesion->nombre ?? '') }}">
            @error('nombre')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

    </div>
    {{-- Botones --}}
    <div class="min-w-full flex justify-center">                        

        <a class=" shadow mx-3 bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none
         text-white font-bold py-2 px-10 rounded" href="{{ route('profesion.index') }}">
            Regresar
        </a>
        <button class="  shadow mx-3 bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none
         text-white font-bold py-2 px-10 rounded" type="submit">
            {{ isset($profesion) ? 'Actualizar' : 'Guardar'}}
        </button>
    </div>


