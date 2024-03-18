@extends('layout')

@section('header')
    <x-header/>
@endsection

@section('content')
    <div class="flex w-full justify-center flex-col gap-2">

        <span class="flex w-full justify-center">
            <img src="{{ url("assets/$filme->image_path") }}" class="rounded shadow-xl" width="300rem">
        </span>

        <div class="flex flex-col justify-center">
            <p class="text-center text-5xl text-slate-100">{{$filme->nome_filme}}</p>
        </div>

        <form class="flex w-full justify-center items-center" action="/checkout/{{$ingresso->id}}" method="post">
            @csrf
            <button type="submit" class="p-2 rounded bg-green-500 text-green-200 border border-green-400">
                Comprar
            </button>
        </form>
    </div>
@endsection