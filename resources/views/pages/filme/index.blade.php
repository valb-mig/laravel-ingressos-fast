@extends('layout')

@section('content')
    <div>
        {{$filme->nome_filme}}
        <section id="cinemas" class="flex flex-col gap-2">
           @foreach ($cinemas as $cinema)
            <div>
                <div class="flex flex-col">
                    <b>{{$cinema->nome_cinema}}</b>
                    <span class="text-sm">{{$cinema->rua_cinema}}</span>
                </div>
                <div id="ingressos" class="flex flex-col gap-2">
                    <span>Ingressos Disponíveis</span>
                    <div class="flex">
                        @foreach ($ingressos as $ingresso)
                            <div class="flex flex-col">
                                <div>Sala:{{$ingresso->id_sala}}</div>
                                <div>#{{$ingresso->id}}</div>
                                <div>{{$ingresso->hora_entrada}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
           @endforeach
        </section>
    </div>
@endsection