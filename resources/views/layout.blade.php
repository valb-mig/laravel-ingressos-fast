<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('public/css/app.css')
    <title>🎟️ Ingressos (Fast) | Catálogo</title>
</head>
<body class="bg-slate-800">
    <header class="flex justify-center lg:justify-between bg-slate-700 text-slate-200 items-center w-full h-[4rem] px-2 mb-8">
        <a class="text-2xl flex items-center bg-slate-600 p-2 rounded gap-2" href="/">
            <i class="fa-solid fa-ticket rotate-45"></i>
            Ingressos fast
        </a>
        {{-- <span>Recife / PE</span> --}}
    </header>
    <main id="content" class="flex h-full w-full text-slate-200">    
        @yield('content')
    </main>
</body>
</html>