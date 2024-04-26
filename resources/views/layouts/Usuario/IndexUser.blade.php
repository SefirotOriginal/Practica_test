<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Usuarios
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <a class=" text-sm bg-sky-500 text-white hover:bg-blue-700  font-bold  px-4 py-2 rounded outline-none focus:outline-none mb-5 ease-linear transition-all duration-150" type="button" href={{ route ('user.create') }}>
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
                                        Correo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Roll
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Accion
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$user->name}}
                                    </th>
                                    <th class="px-6 py-4">
                                        {{$user->email}}
                                    </th>
                                    <th class="px-6 py-4">
                                        @foreach($roles as $rol)
                                        @if($user->roles->contains($rol))
                                        {{ $rol->name }}
                                        @endif
                                        @endforeach
                                    </th>
                                    <th class="px-6 py-4">
                                        <a href="{{ route('user.edit', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Editar</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
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
                    <div class="text-sm bg-sky-500 text-white hover:bg-blue-700 font-bold px">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>