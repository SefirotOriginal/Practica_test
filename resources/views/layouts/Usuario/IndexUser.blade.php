<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Usuarios
        </h2>
    </x-slot>


    <div class="py-12">
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <a class=" text-sm bg-sky-500 text-white hover:bg-blue-700  font-bold  px-4 py-2 rounded outline-none focus:outline-none mb-5 ease-linear transition-all duration-150" type="button" href={{ route ('persona.create') }}>
                            Agregar Persona
                        </a>
                    </div>
                    {{-- Table --}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Apellido
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha de nacimiento
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Genero
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personas as $persona)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$persona->nombre}}
                                    </th>
                                    <th class="px-6 py-4">
                                        {{$persona->apellido}}
                                    </th>
                                    <th /th class="px-6 py-4">
                                        {{$persona->fecha_nacimiento}}
                                    </th>
                                    <th /th class="px-6 py-4">
                                        {{$persona->genero}}
                                    </th>
                                    <th /th class="px-6 py-4">
                                        <a href="{{ route('persona.edit', $persona->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Editar</a>
                                        <a href="{{ route('persona.destroy', $persona->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline px-1"  data-confirm-delete="true">Borrar</a> 
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-sm bg-sky-500 text-white hover:bg-blue-700 font-bold px">

                    </div>
                </div>
            </div>
        </div> -->
    </div>
</x-app-layout>