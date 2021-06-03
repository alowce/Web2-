<div class="w-full">
    <h1 class="px-6 pt-4 font-semibold text-center">Aqui estão seus tutoriais:</h1>

    @foreach (Auth::user()->tutorials as $tutorials)
    <div class="px-6 py-3">
        Título: 
        <a class="underline text-blue-700" href="#">{{ $tutorials->title }}</a> 
    </div>
       <div class="px-6 py-3">
        <a class="underline text-blue-700" href="{{ route('remove_tutorial', ['id' => $tutorials->id]) }}">Apagar</a> 
    </div>
    @endforeach

</div>
