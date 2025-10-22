@if ($viewMode === 'grid')
    <div class="p-4 border rounded shadow flex flex-col justify-between">
        <div>
            <a href="{{ route('workspace.show', $workspace->id) }}">
                <div class="text-l font-semibold">{{ $workspace->name }}</div>
                <p>{{ $workspace->description }}</p>
            </a>
        </div>
        <div class="buttons-ctn flex justify-end items-baseline gap-[1.5px]">
            <x-update-workspace-details :workspace="$workspace" :description="$workspace->description" />

            <form method="POST" action="{{ route('workspace.destroy', $workspace->id) }}" class="mt-4 flex justify-end">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-pink-300 hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path
                            d="m18.431 5.569c-.365-.365-.956-.365-1.321 0l-5.11 5.11-5.11-5.11c-.365-.365-.956-.365-1.321 0s-.365.956 0 1.321l5.11 5.11-5.11 5.11c-.365.365-.365.956 0 1.321s.956.365 1.321 0l5.11-5.11 5.11 5.11c.365.365.956.365 1.321 0s.365-.956 0-1.321l-5.11-5.11 5.11-5.11c.365-.365.365-.956 0-1.321z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
@else
    <li class="border-b pb-2 flex justify-between items-center">
        <div class="w-5/6"> <a href="{{ route('workspace.show', $workspace->id) }}">
                <h3 class="text-lg font-semibold">{{ $workspace->name }}</h3>
                <p>{{ $workspace->description }}</p>

            </a>
        </div>
        <div class="buttons-ctn flex justify-end items-baseline flex gap-[1.9px]">
            <x-update-workspace-details :workspace="$workspace" :description="$workspace->description" />

            <form method="POST" action="{{ route('workspace.destroy', $workspace->id) }}"
                class="mt-4 flex justify-end">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-pink-300 hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path
                            d="m18.431 5.569c-.365-.365-.956-.365-1.321 0l-5.11 5.11-5.11-5.11c-.365-.365-.956-.365-1.321 0s-.365.956 0 1.321l5.11 5.11-5.11 5.11c-.365.365-.365.956 0 1.321s.956.365 1.321 0l5.11-5.11 5.11 5.11c.365.365.956.365 1.321 0s.365-.956 0-1.321l-5.11-5.11 5.11-5.11c.365-.365.365-.956 0-1.321z" />
                    </svg>


                </button>
            </form>
        </div>
    </li>
@endif
