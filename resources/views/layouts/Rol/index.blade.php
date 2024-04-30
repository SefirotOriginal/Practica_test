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
                        <a class="text-sm bg-sky-500 text-white hover:bg-blue-700 font-bold px-4 py-2 rounded outline-none focus:outline-none mb-5 ease-linear transition-all duration-150" type="button">
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
                                        @foreach($roles->permissions as $key => $item)
                                        <span class="badge blue">{{ $item->title }}</span>
                                        @endforeach
                                    </th>
                                    <th scope="row" class=" px-6 py-4 font:medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$rol->name}}
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