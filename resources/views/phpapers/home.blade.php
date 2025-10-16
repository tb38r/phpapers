<x-layout title="Dashboard">

    <x-slot name="toggle">
        <a href="{{ route('home', ['view' => 'list']) }}" style="color: rgba(163, 188, 242, 1);"
            class="mr-2 text-sm hover:underline">
            List View
        </a>

        <a href="{{ route('home', ['view' => 'grid']) }}" style="color: rgba(163, 188, 242, 1);"
            class="text-sm hover:underline">
            Grid View
        </a>
    </x-slot>

    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-semibold text-slate-700">Workspaces</h2>

        <details class="relative z-50 group">
            <summary class="cursor-pointer text-blue-300 hover:text-blue-600 text-2xl font-bold relative"
                style="list-style: none">
                <span class="relative">
                    +
                    <span
                        class="absolute left-full top-1/2 -translate-y-1/2 ml-2 px-2 py-1 text-xs text-white bg-gray-800 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 transition">
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


        {{-- <button
        @click="showForm = true"
        class="text-blue-300 hover:text-blue-600 text-2xl font-bold"
        title="Create new workspace"
    >
        +
    </button> --}}
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
