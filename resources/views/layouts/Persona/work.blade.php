<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Profesion
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative w-full flex-grow flex-1 px-4 text-right">
                        <a class=" text-sm bg-sky-500 text-white hover:bg-blue-700 font-bold 
                        px-4 py-2 rounded outline-none focus:outline-none mb-5 ease-linear 
                        transition-all duration-150" type="button" href={{ route ('profesion.create') }}>
                            Agregar profesion
                        </a>
                    </div>
                    {{-- Table --}}
                    <div class="w-40 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    
                                    <th scope="col" class="px-6 py-3">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profesions as $profesion)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$profesion->nombre}}
                                    </th>                                 
                                    <th class="px-6 py-4">
                                        <a href="{{ route('profesion.edit', $profesion->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Editar</a>
                                        <a href="{{ route('profesion.destroy', $profesion->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline px-1"  data-confirm-delete="true">Borrar</a> 
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>