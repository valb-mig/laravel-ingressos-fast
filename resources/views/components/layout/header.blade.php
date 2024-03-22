@php
    $user = \App\Helpers\GlobalHelper::getUserData();
@endphp

<header class="flex bg-slate-700 text-slate-200 items-center w-full h-[4rem] px-2 mb-8">
    <div class="flex w-full justify-between">
        <a class="text-2xl flex items-center bg-slate-600 p-2 rounded gap-2" href="/">
            <i class="fa-solid fa-ticket rotate-45"></i>
            Ingressos fast
        </a>
    </div>
    @if(!isset($user) || empty($user))
        <a class="flex justify-center items-center w-10 h-10 bg-slate-600 rounded-full" href="/login">
            <i class="fa fa-user"></i>
        </a>
    @else
        <div class="flex gap-2 items-center">
            @if ($user->role != "cliente")
                <span class="px-2 bg-green-600 rounded-full">
                    {{$user->role}}
                </span>
            @endif

            <div class="flex items-center gap-2">
                <p class="px-2 bg-slate-600 rounded-full">
                    {{$user->username}}
                </p>
                <span class="flex justify-center items-center w-10 h-10 bg-slate-600 rounded-full" href="/login">
                    <i class="fa fa-user"></i>
                </span>
            </div>
        </div>
    @endif
</header>