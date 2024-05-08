<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-x1 text-gray-800 dark:text-gray-200 leading-tight">
            Roles
        </h2>
    </x-slot>

    <div class=" py-12">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" p-6 text-gray-900 dark:texx-gray-100">
                    <div class=" relative w-dull flex-groe flex-1 text-right">
                        <a class="text-sm bg-sky-500 text-white hover:bg-blue-700 font-bold px-4 py-2 rounded outline-none focus:outline-none mb-5 ease-linear transition-all duration-150" href={{ route ('role.create') }} type="button">
                            Agregar Rol
                        </a>
                    </div>

                    <div class=" relative overflow-x-auto shadow-sm sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-rigth text-gray-500 dark:text-gray-400">
                            <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                                <tr>
                                    <th scope="col" class=" px-6 py-3">
                                        Rol
                                    </th>
                                    <th scope="col" class=" px-6 py-3">
                                        Permisos
                                    </th>
                                    <th scope="col" class=" px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $rol)
                                <tr class=" odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class=" px-6 py-4 font:medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$rol->name}}
                                    </th>
                                    <th scope="row" class=" px-6 py-4 font:medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="badge blue">{{count($rol->permissions);}}</span>
                                    </th>
                                    <th scope="row" class=" px-6 py-4 font:medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="{{ route('role.edit', $rol->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Editar</a>
                                        <!-- <a href="{{ route('role.destroy', $rol->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline px-1" data-confirm-delete="true">Borrar</a> -->
                                        <form action="{{ route('role.destroy', $rol->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline px-1" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Borrar</button>
                                        </form>
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