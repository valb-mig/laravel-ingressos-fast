@props(['id','name','title'])

<div id="modal_{{$name}}" class="fixed inset-0 z-50 items-center justify-center bg-black bg-opacity-50 backdrop-blur-[4px]">
    <div class="flex flex-col h-full justify-center items-center px-2">
        <div class="flex flex-col w-full lg:w-[30vw] bg-slate-800 border-2 border-slate-700 rounded">
            <div id="modal_header" class="flex items-center justify-between w-full bg-slate-600 p-2">
                <span id="title" class="flex items-center space-x-2">
                    {{$title}}
                </span>
            </div>
            <form action="/filme/{{$id}}/edit" method="post" class="flex flex-col gap-2 p-2" enctype="multipart/form-data">
                @csrf
                <div id="modal_body" class="flex flex-col gap-2">
                    <div class="flex flex-col gap-2">
                        <label for="nome_filme" class="text-sm text-slate-100">Nome</label>
                        <input type="text" name="nome_filme" id="nome_filme" class="bg-slate-700 border border-slate-600 rounded p-2 w-full">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="descricao_filme" class="text-sm text-slate-100">Descrição</label>
                        <input type="text" name="descricao_filme" id="descricao_filme" class="bg-slate-700 border border-slate-600 rounded p-2 w-full">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="status_filme" class="text-sm text-slate-100">Status filme</label>
                        <select name="status_filme" id="status_filme" class="bg-slate-700 border border-slate-600 rounded p-2 w-full">
                            <option value="A">Ativo</option>
                            <option value="I">Inativo</option>
                        </select>
                    </div>
                </div>

                <div id="modal_footer" class="flex justify-end gap-2">
                    <button
                        type="button"
                        onclick="$('#modal_{{$name}}').fadeToggle()"
                    >
                        Cancelar
                    </button>

                    <button
                        type="submit"
                        class="bg-green-500 text-green-200 border border-green-400 p-2 rounded"
                    >
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>