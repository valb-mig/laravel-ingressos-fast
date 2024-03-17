@php
    $user = \App\Helpers\GlobalHelper::getUserData();
@endphp

<header class="flex bg-slate-700 text-slate-200 items-center w-full h-[4rem] px-2 mb-8">
    <div class="flex w-full justify-center lg:justify-between">
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
        <div class="flex items-center relative">
            <p class="pl-2 pr-1 bg-slate-600 rounded-l-full absolute left-[-2.8rem]">
                {{$user->username}}
            </p>
            <span class="flex justify-center items-center w-10 h-10 bg-slate-600 rounded-full" href="/login">
                <i class="fa fa-user"></i>
            </span>
        </div>
    @endif
</header>