<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Crear Usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-2/3  mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">

                    {{-- Formulario --}}
                    <form class="w-full" method="post" action="{{route('user.store')}}">
                        @csrf

                        <div>
                            <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2" for="name">Nombre</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500
                                rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white " id="name" type="text" name="name">
                        </div>

                        <div>
                            <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2" for="email">Correo</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500
                                rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white " id="email" type="text" name="email">
                        </div>

                        <div>
                            <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2" for="password">Contraseña</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500
                                rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white " id="password" type="text" name="password">
                        </div>

                        <div>
                            <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2" for="password">Roll</label>
                            <select id="rol" name="rol" class="mt-1 block
            w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring
             focus:ring-indigo-200 focus:ring-opacity-50" required>
                                @foreach ($roles as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('rol')" />
                        </div>

                        <div class=" mt-4 min-w-full flex justify-center">                        
                   <!-- hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded -->
                            <a class=" shadow mx-3 bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none
                             text-white font-bold py-2 px-10 rounded " href="{{ route('user.index') }}">
                                Regresar
                            </a>
                            <button class="  shadow mx-3 bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded" type="submit">
                                Agregar
                            </button>
                    </form>
                    {{-- --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>