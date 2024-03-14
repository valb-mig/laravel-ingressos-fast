<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Catalogo de filmes</title>
</head>
<body>
    <header class="flex justify-between bg-orange-300 items-center w-full h-[2rem] px-2">
        <span>Ingressos.Fast</span>
        <span>Recife / PE</span>
    </header>
    <main id="content" class="flex w-full h-full m-2">    
        @yield('content')
    </main>
</body>
</html>