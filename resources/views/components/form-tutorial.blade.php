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
