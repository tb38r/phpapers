<x-layout title="{{ $workspace->name }}">
    <h1>{{ $workspace->name }}</h1>
    <p>{{ $workspace->description }}</p>

    <h2 class="mt-6">{{ $paper->title }}</h2>
    <p class="mb-4">{{ $paper->description }}</p>

    <h3 class="mt-4">Notes</h3>
    <br>
    <ul>
        @foreach ($paper->eloquentNotes as $note)
            <li>{{ $note->content }}</li>
        @endforeach
    </ul>
</x-layout>
