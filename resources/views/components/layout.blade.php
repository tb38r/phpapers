<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>{{ $title ?? 'phphapers' }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">
        @if (session('delete-status'))
            <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded">
                {{ session('delete-status') }}
            </div>
        @endif
          @if (session('create-status'))
            <div class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded">
                {{ session('create-status') }}
            </div>
        @endif


        <header class="bg-slate-100 border-b border-slate-300">
            <a href="{{ route('home') }}">
                <div class="max-w-6xl mx-auto px-4 py-4">
                    <h1 class="text-2xl font-light tracking-wide text-slate-700">
                        phphapers
                    </h1>
            </a>
            </div>
        </header>
        <main class="flex-1 w-full">
            {{-- Toggle bar outside the content container --}}
            <div class="w-full flex justify-end px-4 py-2 bg-slate-50 border-slate-200">
                {{ $toggle ?? '' }}
            </div>

            {{-- Main content container --}}
            <div class="max-w-6xl mx-auto px-4 py-6">
                {{ $slot }}
            </div>
        </main>



        <footer class="bg-slate-100 border-b border-slate-300">
            <div class="max-w-6xl mx-auto px-4 py-4 text-sm text-slate-600 flex justify-end">
                &copy; {{ date('Y') }} phphapers. All rights reserved.
            </div>
        </footer>

    </body>

</html>
