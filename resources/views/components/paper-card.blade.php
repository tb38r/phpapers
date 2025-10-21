@props(['workspaceId', 'paper'])

<div class="relative w-full max-w-sm mx-auto bg-white border border-gray-300 rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
    <a href="{{ route('paper.show', [$workspaceId, $paper->id]) }}" class="block">
        @for ($i = 0; $i < 6; $i++)
            <div class="relative h-6 border-b border-gray-200">
                @if ($i === 2)
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="bg-white px-2 text-gray-700 text-sm font-medium" style="font-family: 'Comic Sans MS'; text-transform: lowercase;" >
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
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6m2 0a2 2 0 00-2-2H9a2 2 0 00-2 2m3 0h4" />
            </svg>
        </button>
    </form>
</div>
