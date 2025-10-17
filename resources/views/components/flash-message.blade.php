@props(['message', 'type' => 'success'])

<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
    class="mb-4 px-4 py-2 bg-green-100 text-green-800 rounded transition-opacity duration-500 ease-in-out">
    {{ $message }}
</div>
