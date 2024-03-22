@extends('layout')

@section('header')
    <x-layout.header/>
@endsection

@section('content')
    <div class="flex flex-col gap-2 w-full px-8 justify-center">

        @if (isset($user->role) && $user->role == "admin")
            <div class="flex w-full justify-start">
                <a href="/admin/catalogo" class="flex items-center gap-2 bg-green-700 p-1 rounded">
                    <span class="flex justify-center items-center rounded w-7 h-7 bg-green-600">
                        <i class="fa-solid fa-gear"></i>
                    </span>
                    Configurar
                </a>    
            </div>
        @endif

        <div class="flex gap-2 flex-wrap">
            @foreach ($filmes as $filme)
                <a href="/filme/{{$filme->id}}" class="transition-all  bg-slate-700 border border-slate-600 shadow-xl p-2 rounded flex flex-col hover:scale-110">
                    <img src="{{ url("assets/$filme->image_path") }}" class="rounded" width="200rem">
                    <p class="text-[1.3rem]">{{$filme->nome_filme}}</p>
                    <span class="text-sm">
                        <small class="text-slate-500">
                            {{$filme->descricao_filme}}
                        </small>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
@endsection