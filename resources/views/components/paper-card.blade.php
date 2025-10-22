@props(['workspaceId', 'paper'])

<div
    class="relative w-full max-w-sm mx-auto bg-white border border-gray-300 rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
    <a href="{{ route('paper.show', [$workspaceId, $paper->id]) }}" class="block">
        @for ($i = 0; $i < 6; $i++)
            <div class="relative h-6 border-b border-gray-200">
                @if ($i === 2)
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="bg-white px-2 text-gray-700 text-sm font-medium"
                            style="font-family: 'Comic Sans MS'; text-transform: lowercase;">
                            {{ $paper->title }}
                        </span>
                    </div>
                @endif
            </div>
        @endfor
    </a>

    <form method="POST" action="{{ route('paper.destroy', [$workspaceId, $paper]) }}" class="absolute bottom-2 right-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500 hover:text-red-700" title="Delete paper">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path
                    d="m18.431 5.569c-.365-.365-.956-.365-1.321 0l-5.11 5.11-5.11-5.11c-.365-.365-.956-.365-1.321 0s-.365.956 0 1.321l5.11 5.11-5.11 5.11c-.365.365-.365.956 0 1.321s.956.365 1.321 0l5.11-5.11 5.11 5.11c.365.365.956.365 1.321 0s.365-.956 0-1.321l-5.11-5.11 5.11-5.11c.365-.365.365-.956 0-1.321z" />
            </svg>
        </button>
    </form>
</div>
