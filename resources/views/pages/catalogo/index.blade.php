@extends('layout')

@section('content')
    <div class="flex gap-2">
        @foreach ($filmes as $filme)
            <a href="/filme/{{$filme->id}}" class=" bg-orange-200 p-2 rounded">
                {{$filme->nome_filme}}
            </a>
        @endforeach
    </div>
@endsection