<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full">
                    <h1 class="px-6 pt-4 font-semibold text-center">Criar tutorial:</h1>
                    <form class="rounded px-6 pt-6 pb-8 mb-4" method="POST" action="{{ route('create_tutorial') }}">
                        @csrf

                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="title">
                            Título:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="Exemplo: Como passar batom corretamente"/>
                        </div>

                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="title">
                            Descrição:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="description" type="text" name="description" placeholder="Exemplo: Cansada de borrar toda a boca?"/>
                        </div>

                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="title">
                            Materiais utilizados:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="materials" type="text" name="materials" placeholder="Exemplo: Batom, blush..."/>
                        </div>

                        <div class="flex items-center justify-between">
                        <x-button>
                            Salvar
                        </x-button>
                        </div>
                    </form>
                </div>
        </div>

        <div class="bg-white mt-6 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full">
                    <h1 class="px-6 pt-4 font-semibold text-center">Criar etapa:</h1>
                    <form class="rounded px-6 pt-6 pb-8 mb-4" method="POST" action="{{ route('create_stage') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="title">
                            Título:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="Exemplo: Como passar batom corretamente"/>
                        </div>

                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="title">
                            Conteúdo:
                        </label>
                        <textarea class="resize-none shadow appearance-none border rounded w-full py-2 px-3 -mb-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" name="content" id="content" placeholder="Exemplo: Olá, pessoal! Aqui neste tutorial..." rows="10">
                        </textarea>
                        </div>

                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="title">
                            Adicionar imagem:
                        </label>
                        <x-input class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" id="materials" type="file" name="materials"/>
                        </div>

                        <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-semibold mb-2 required_field" for="title">
                            Vincular tutorial:
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 -mb-1 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" name="tutorial" id="tutorial">
                        @foreach (Auth::user()->tutorials as $tutorial)
                            <option value="{{ $tutorial->id }}">{{ $tutorial->title }}</option>
                        @endforeach
                        </select>
                        </div>

                        <div class="flex items-center justify-between">
                        <x-button>
                            Salvar
                        </x-button>
                        </div>
                    </form>
                </div>
        </div>

            <div class="bg-white mt-6 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full">
                    <h1 class="px-6 pt-4 font-semibold text-center">Aqui estão seus tutoriais:</h1>
                    @foreach (Auth::user()->tutorials as $tutorials)
                    <div class="px-6 py-3">
                        Título: 
                        <a class="underline text-blue-700" href="{{ route('show_tutorial', ['t_id' => $tutorials->id]) }}">{{ $tutorials->title }}</a> 
                    </div>
                    @endforeach
                </div>  
            </div>

        </div>
    </div>
</x-app-layout>
