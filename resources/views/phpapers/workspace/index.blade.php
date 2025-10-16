<x-layout title="{{ $workspace->name }}">
    <h1>{{ $workspace->name }}</h1>
    <p>{{ $workspace->description }}</p>

    <h2 class="mt-6">Papers</h2>
    <br>
    <ul>
        @foreach ($workspace->papers as $paper)
            <a href="{{ route('paper.show', [$workspace->id, $paper->id]) }}">
                <li class="mb-4">
                    <h3>{{ $paper->title }}</h3>

                </li>
            </a>
        @endforeach
    </ul>
</x-layout>
