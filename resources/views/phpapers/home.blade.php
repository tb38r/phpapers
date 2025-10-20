<x-layout title="Dashboard">
    <x-slot name="toggle">
        @if ($viewMode === 'list')
            <a href="{{ route('home', ['view' => 'grid']) }}" style="color: rgba(163, 188, 242, 1);">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                </svg>


            </a>
        @else
            <a href="{{ route('home', ['view' => 'list']) }}" style="color: rgba(163, 188, 242, 1);">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>

            </a>
        @endif
    </x-slot>

    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-semibold text-slate-700">Workspaces</h2>

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
                        Create new workspace
                    </span>
                </span>
            </summary>

            <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white p-6 rounded shadow-lg w-[360px] h-[240px] relative">
                    <form method="POST" action="{{ route('workspace.store') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="block text-sm font-medium text-slate-600">Name</label>
                            <input type="text" name="name" id="name" required
                                class="w-full border px-3 py-2 rounded">
                        </div>
                        <div class="mb-2">
                            <label for="description"
                                class="block text-sm font-medium text-slate-600">Description</label>
                            <textarea name="description" id="description" rows="2" class="w-full border px-3 py-2 rounded"></textarea>
                        </div>
                        <div class="flex justify-end space-x-2 mt-4">
                            <button type="submit"
                                class="text-sm text-white bg-blue-600 hover:bg-blue-700 px-2 py-2 rounded">
                                Create
                            </button>
                            <button type="reset" onclick="this.closest('details').removeAttribute('open')"
                                class="text-sm text-slate-500 hover:underline">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </details>



    </div>


    @if ($viewMode === 'grid')
        <div class="grid grid-cols-3 gap-4">
            @foreach ($workspaces as $workspace)
                <x-workspace-item :workspace="$workspace" viewMode="grid" />
            @endforeach
        </div>
    @else
        <ul class="space-y-4">
            @foreach ($workspaces as $workspace)
                <x-workspace-item :workspace="$workspace" viewMode="list" />
            @endforeach
        </ul>
    @endif
</x-layout>
