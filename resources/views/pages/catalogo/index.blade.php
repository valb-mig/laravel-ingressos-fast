@extends('layout')

@section('header')
    <x-header/>
@endsection

@section('content')
    <div class="flex w-full justify-center">
        <div class="flex gap-2 px-8 flex-wrap">
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