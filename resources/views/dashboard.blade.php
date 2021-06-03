<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg shadow-md">
                <x-form-tutorial/>
            </div>

            <div class="bg-white mt-6 overflow-hidden shadow-sm sm:rounded-lg shadow-md">
                <x-form-stage/>
            </div>

            <div class="bg-white mt-6 overflow-hidden shadow-sm sm:rounded-lg shadow-md">
                <x-list-tutorials/>
            </div>

        </div>
    </div>
</x-app-layout>
