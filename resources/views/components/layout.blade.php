        @php use Illuminate\Support\Str; @endphp



        <!DOCTYPE html>
        <html lang="en">

            <head>
                <meta charset="UTF-8">
                <title>{{ $title ?? 'phpapers' }}</title>
                <link rel="icon" href="{{ asset('favicon-2.ico') }}" type="image/x-icon">
                <link rel="stylesheet" href="{{ asset('css/app.css') }}">


                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <script src="https://cdn.tailwindcss.com"></script>
                <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
            </head>

            <body class="bg-slate-50 text-slate-800 h-screen overflow-hidden flex flex-col">


                @foreach (session()->all() as $key => $value)
                    @if (Str::endsWith($key, '-status'))
                        <x-flash-message :message="$value" />
                    @endif
                @endforeach




                <header class="bg-slate-100 border-b border-slate-300">
                    <div class="max-w-6xl mx-auto px-4 py-4">
                        <a href="{{ route('home') }}">
                            <h1 class="text-2xl font-light tracking-wide text-slate-700">
                                phpapers
                            </h1>
                        </a>
                    </div>
                </header>
                <main class="flex-1 w-full">
                    {{-- Toggle bar outside the main container --}}
                    <div class="w-full flex justify-end items-center px-4 py-2 bg-slate-50">
                        <div class="flex items-center gap-4">
                            @isset($toggle)
                                {{ $toggle }}
                            @endisset
                        </div>
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
