<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Crear profesion
        </h2>
    </x-slot>                                                                                           


    <div class="py-12">
        <div class="w-2/3  mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                   
                    {{-- Formulario --}}                  
                    <form class="w-full" method="POST" action="{{ route('profesion.store') }}" >
                        @csrf
                        <div class="flex flex-wrap mx-5 mb-6">
                   
                            <div class="w-full md:w-full px-3 mb-6 md:mb-0 ">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 place-content-center" for="nombre">
                                    Nombre
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500
                                rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white " 
                                required type="text" placeholder="Medico" name="nombre" id="nombre">
                                @error('nombre')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- Botones --}}
                        <div class="min-w-full flex justify-center">                        
                   <!-- hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded -->
                            <a class=" shadow mx-3 bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none
                             text-white font-bold py-2 px-10 rounded " href="{{ route('profesion.index') }}">
                                Regresar
                            </a>
                            <button class="  shadow mx-3 bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded" type="submit">
                                Agregar
                            </button>
                        </div>
                    </form>
                    {{--  --}}
                </div>
            </div>         
        </div>
    </div>
</x-app-layout>