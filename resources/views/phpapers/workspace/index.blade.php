<x-layout title="{{ $workspace->name }}">
    <b><h1>{{ $workspace->name }}</h1></b>
    <b><h3>{{ $workspace->description }}</h3></b>

    <br>
<div class="grid grid-cols-3 gap-4">
    @foreach ($workspace->papers as $paper)
        <x-paper-card
            :workspaceId="$workspace->id"
            :paper="$paper"
        />
    @endforeach
</div>



</x-layout>
