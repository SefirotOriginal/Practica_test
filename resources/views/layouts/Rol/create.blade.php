<x-app-layout>
    <x-slot name="header">
        <h2 class="font-swmibold text-x1 text-gray-800 dark:text-gray-200 leasing-tight">
            Creacion de roles
        </h2>

        <script>

        </script>
    </x-slot>

    <div class="py-12">
        <div class="w-2/3 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 place-items-center">
                    <form class="flex flex-col w-full justify-center items-center" method="post" action="{{route('role.store')}}">

                        @csrf
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                Nombre del Rol
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white " required type="text" placeholder="Admin" name="name" id="name">
                            @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="  w-3/4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                            <div class="form-group">
                                <strong>Permission:</strong>
                                <br />
                                @foreach ($permission as $value)
                                <label>
                                    <input type="checkbox" name="permission[]" value="{{ $value->name }}" class="">
                                    {{ $value->name }}</label>
                                <br />
                                @endforeach
                            </div>
                        </div>

                        <div class="">
                            <!-- hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded -->
                            <a class=" shadow mx-3 bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none
                             text-white font-bold py-2 px-10 rounded " href="{{ route('role.index') }}">
                                Regresar
                            </a>
                            <button class="  shadow mx-3 bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-10 rounded" type="submit">
                                Agregar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>