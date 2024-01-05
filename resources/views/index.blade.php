<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel API Rest</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')

        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="bg-gray-100 text-gray-700">

        <div class="mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach($notas as $nota)
                    <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                        <h3 class="text-lg font-bold mb-4">{{ $nota->titulo }}</h3>
                        <p class="text-xs">{{ $nota->excerpt }}</p>
                        <p class="text-xs text-end">{{ $nota->published_at }}</p>
                    </div>
                @endforeach
            </div>
            
            <div class="mb-10">
                {{ $notas->links() }}
            </div>

        </div>

    </body>
</html>
