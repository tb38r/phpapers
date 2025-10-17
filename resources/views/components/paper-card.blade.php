@props(['workspaceId', 'paper'])

<a href="{{ route('paper.show', [$workspaceId, $paper->id]) }}" class="block">
    <div
        class=" max-w-xs mx-auto bg-white border border-gray-300 rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300">
        @for ($i = 0; $i < 6; $i++)
            <div class="relative h-6 border-b border-gray-200">
                @if ($i === 2)
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="bg-white px-2 text-gray-700 text-sm font-medium">
                            {{ $paper->title }}
                        </span>
                    </div>
                @endif
            </div>
        @endfor
    </div>
</a>
