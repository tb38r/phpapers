@if ($viewMode === 'grid')
    <div class="p-4 border rounded shadow flex flex-col justify-between">
        <div>
            <a href="{{ route('workspace.show', $workspace->id) }}">
                <h3 class="text-lg font-semibold">{{ $workspace->name }}</h3>
                <p>{{ $workspace->description }}</p>
            </a>
        </div>
        <form method="POST" action="{{ route('workspace.destroy', $workspace->id) }}" class="mt-4 flex justify-end">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 text-sm hover:underline">Delete</button>
        </form>
    </div>
@else
    <li class="border-b pb-2 flex justify-between items-center">
        <div>
            <a href="{{ route('workspace.show', $workspace->id) }}">
                <h3 class="text-lg font-semibold">{{ $workspace->name }}</h3>
                <p>{{ $workspace->description }}</p>

            </a>
        </div>
        <form method="POST" action="{{ route('workspace.destroy', $workspace->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 text-sm hover:underline">Delete</button>
        </form>
    </li>
@endif
