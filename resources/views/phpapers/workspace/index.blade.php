@props(['workspace'])

<x-layout title="{{ $workspace->name }}">


    <div class="flex items-center justify-end mb-2">

        <details class="relative z-50 group">
            <summary class="cursor-pointer text-blue-300 hover:text-blue-600 text-2xl font-bold relative"
                style="list-style: none">
                <span class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>

                    <span
                        class="absolute right-full top-1/2 -translate-y-1/2 mr-2 px-2 py-1 text-xs text-white bg-gray-800 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 transition">
                        Create new paper
                    </span>
                </span>
            </summary>

            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div
                    class="bg-white rounded shadow-lg w-[280px] h-[180px] p-6 relative flex items-center justify-evenly">
                    <form method="POST" action="{{ route('paper.store', $workspace) }}"> @csrf
                        <div class="mb-3 minor-title">
                            New paper</div>
                        <div class="mb-2">
                            <label for="name" class="block text-sm font-medium text-slate-600">name</label>
                            <input type="text" name="name" id="name" required
                                class="w-full border px-3 py-2 rounded">
                        </div>
                       
                        <div class="flex justify-end space-x-2 mt-4">
                            <button type="submit"
                                class="text-sm text-white bg-blue-600 hover:bg-blue-700 px-1 py-1 rounded">
                                create
                            </button>
                            <button type="reset" onclick="this.closest('details').removeAttribute('open')"
                                class="text-sm text-slate-500 hover:underline">
                                cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </details>



    </div>

    <div>
        <h2 class="major-title">{{ $workspace->name }}</h2>
    </div>
    <div>
        <h3 class="minor-title">{{ $workspace->description }}</h3>
    </div>


    <br>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($workspace->papers as $paper)
            <x-paper-card :workspaceId="$workspace->id" :paper="$paper" />
        @endforeach
    </div>



</x-layout>
