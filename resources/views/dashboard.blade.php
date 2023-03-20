<x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-semibold leading-tight text-center text-blue-800 ">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="w-56 overflow-hidden bg-white shadow-sm 0 sm:rounded-lg">
                {{-- <div class="p-6 text-white bg-green-500 place-content-center">
                    {{ __("Usted a iniciado sesión") }}
                </div> --}}
            </div>
        </div>
        @role('gtic')
        <p class="text-center">Este contenido es para gtic</p>
        @endrole
        @role('gerente-admin')
        <p class="text-center">este contenido es para gerente administracion</p>
        @endrole
        @role('administrador')
        <p class="text-center">este contenido es para administradores</p>
        @endrole
    </div>
</x-app-layout>
