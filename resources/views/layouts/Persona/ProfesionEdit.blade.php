<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar profesion
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="w-2/3  mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">

                    {{-- Formulario --}}
                    <form class="w-full" method="post" action="{{route('profesion.update', $profesion->id)}}">
                    @method ('PUT')
                    @include ('layouts.persona.ed')
                    </form>
                    {{-- --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>