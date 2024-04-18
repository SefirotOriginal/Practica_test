@csrf
   <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                Nombres
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white "
                    required type="text" placeholder="Jane" name="nombre" id="nombre" value="{{ old('nombre', $persona->nombre ?? '') }}">
            @error('nombre')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>


        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="apellidos">
                Apellidos
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 "
                    required type="text" placeholder="Doe" name="apellido" id="apellido" value="{{ old('nombre', $persona->apellido ?? '') }}">
            @error('apellido')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>


        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fecha-nacimiento">
                Fecha de nacimiento
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    type="date" required name="fecha_nacimiento" id="fecha-nacimiento" value="{{ old('fecha_nacimiento', isset($persona->fecha_nacimiento) ? $persona->fecha_nacimiento : '') }}">
            @error('fecha_nacimiento')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
       


        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="genero">
                Género
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="genero" id="genero" required>
                    <option value="">Seleccione un género</option>
                    <option value="F" @if(old('genero', $persona->genero ?? '') == 'F') selected @endif>Femenino</option>
                    <option value="M" @if(old('genero', $persona->genero ?? '') == 'M') selected @endif>Masculino</option>
                    <option value="X" @if(old('genero', $persona->genero ?? '') == 'X') selected @endif>Otro</option>
                </select>
                @error('genero')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 px-3 mt-2">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="profesion_id">
                Profesion
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="profesion_id" id="profesion_id" required>
                    <option value="">Seleccione un género</option>
                    <option value="1" @if(old('profesion_id', $persona->profesion_id ?? '') == '1') selected @endif>Medico</option>
                    <option value="2" @if(old('profesion_id', $persona->profesion_id ?? '') == '2') selected @endif>Obrero</option>
                    <option value="3" @if(old('profesion_id', $persona->profesion_id ?? '') == '3') selected @endif>Programador</option>
                </select>
                @error('genero')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
       
    </div>
    {{-- Botones --}}
    <div class="min-w-full flex justify-center">                        


        <a class=" shadow mx-3 bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded" href="{{ route('persona.index') }}">
            Regresar
        </a>
        <button class="  shadow mx-3 bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded" type="submit">
            {{ isset($persona) ? 'Actualizar' : 'Guardar'}}
        </button>
    </div>


