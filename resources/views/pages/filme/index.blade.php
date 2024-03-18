@extends('layout')

@section('header')
    <x-header/>
@endsection

@section('content')
    <div class="flex flex-col w-full px-2 md:px-[10vw]">

        <div class="flex gap-2">
            <img src="{{ url("assets/$filme->image_path") }}" class="rounded" width="200rem">
            <div class="flex flex-col">
                <p class="text-2xl text-slate-100">{{$filme->nome_filme}}</p>
                <span class="text-sm text-slate-400">
                    <small>
                        {{$filme->descricao_filme}}
                    </small>
                </span>
            </div>
        </div>

        <section id="cinemas" class="flex flex-col gap-2 ">
            <span class="text-center text-slate-400">Cinemas disponéveis</span>
            <div class="flex  flex-col gap-2 bg-slate-700 border border-slate-600 rounded p-2">
                @if(count($cinemas) > 0)
                    @foreach ($cinemas as $cinema)
                            <div class="border border-slate-600 rounded">
                                <div class="flex flex-col bg-slate-600 p-2">
                                    <b class="text-2xl">{{$cinema->nome_cinema}}</b>
                                    <span class="text-sm text-slate-400">{{$cinema->rua_cinema}}</span>
                                </div>
                                <div id="ingressos" class="flex flex-col gap-2 p-2">
                                    <span>
                                        <b class="bg-sky-700 text-sky-200 text-sm p-1 rounded">Ingressos Disponíveis</b>
                                    </span>
                                    <div class="flex">
                                        @if (count($ingressos) > 0)
                                            <div class="flex w-full gap-2">
                                            @foreach ($ingressos as $ingresso)
                                                @if($cinema->id_cinema == $ingresso->id_cinema)
                                                    <a class="flex relative w-[113px] items-center" href="/checkout/{{$ingresso->id}}">
                                                        <i class="fa-solid fa-ticket-simple text-[100px] text-slate-500">
                                                        </i>
                                                        <div class="flex flex-col w-full justify-center items-center gap-2 absolute text-slate-900">
                                                            <div>Sala:{{$ingresso->id_sala}}</div>
                                                            <div \class="text-sm">{{date('H:i', strtotime($ingresso->hora_entrada))}}</div>
                                                        </div>
                                                    </a>
                                                @endif
                                            @endforeach
                                            </div>
                                        @else
                                            <span class="flex w-full justify-center text-sm">
                                                <b class="bg-blue-700 text-blue-300 border border-blue-300 p-1 rounded">
                                                    <i class="fa-solid fa-info"></i>
                                                    Nenhum ingresso encontrado
                                                </b>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    @endforeach
                @else
                    <span class="flex w-full justify-center text-sm">
                        Nenhuma sessão disponível
                    </span>
                @endif
            </div>
        </section>
    </div>
@endsection