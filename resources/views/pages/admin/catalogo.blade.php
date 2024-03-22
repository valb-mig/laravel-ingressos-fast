@extends('layout')

@section('header')
    <x-layout.header/>
@endsection

@push('scripts')
    <script src="{{ asset('js/admin/catalogo.js') }}" defer></script>
@endpush

@section('content')
    <div class="flex flex-col gap-2 w-full px-8 justify-center">
        <table class="table-auto w-full">
            <thead class="bg-slate-600 text-slate-100">
                <tr>
                    <th class="px-4 py-2">Nome</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Usuário</th>
                    <th class="px-4 py-2">Data de atualização</th>
                    <th class="px-4 py-2">Data de cadastro</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody class="text-slate-200">
                @foreach ($filmes as $filme)
                    <tr>
                        <td class="text-center bg-slate-700 px-4 py-2">{{$filme->nome_filme}}</td>
                        <td class="text-center bg-slate-700 px-4 py-2">{{$filme->status_filme}}</td>
                        <td class="text-center bg-slate-700 px-4 py-2">{{$filme->id_usuario}}</td>
                        <td class="text-center bg-slate-700 px-4 py-2">{{$filme->updated_at}}</td>
                        <td class="text-center bg-slate-700 px-4 py-2">{{$filme->created_at}}</td>
                        <td class="text-center bg-slate-700 px-4 py-2">
                            <div class="flex gap-2">
                                <a href="?modal=open&id={{$filme->id}}">
                                    <i class="fa-solid fa-pen text-blue-200 bg-blue-500 p-2 rounded"></i>
                                </a>
                                <form action="/filme/{{$filme->id}}/remove" method="post">
                                    @csrf
                                    <button type="submit">
                                        <i class="fa-solid fa-close text-red-200 bg-red-500 p-2 rounded"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection