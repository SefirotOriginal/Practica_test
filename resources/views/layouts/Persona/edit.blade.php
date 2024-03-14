<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Persona
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="w-1/3  mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <form class="w-full" method="post" action="{{route('persona.update', $persona->id)}}">
                        @method('PUT')
                        @include('layouts.Persona.form')
                    </form>
                    {{-- Incluir el formulario --}}
            </div>
        </div>
    </div>
</x-app-layout>