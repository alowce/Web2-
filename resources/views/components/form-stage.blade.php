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