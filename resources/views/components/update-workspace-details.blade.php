@props(['workspace'])

<details class="relative z-50 group">
    <summary class="cursor-pointer text-sky-200 hover:text-sky-500 list-none">
        {{-- class="cursor-pointer text-blue-300 hover:text-blue-600 text-2xl font-bold relative"
            style="list-style: none" --}}
        <span class="inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path
                    d="m17.447 3.103c-.969 0-1.883.378-2.567 1.065l-10.286 10.282c-1.407 1.407-2.192 6.035-2.298 6.695-.043.205.019.42.17.57.12.12.28.183.442.183.048 0 .093-.005.14-.015.707-.115 5.282-.894 6.682-2.295l10.286-10.285c.687-.684 1.065-1.597 1.065-2.57s-.378-1.883-1.065-2.567c-.687-.687-1.597-1.065-2.57-1.065zm1.686 5.317-10.286 10.285c-.74.74-3.277 1.43-5.165 1.798.367-1.89 1.055-4.425 1.798-5.165l10.286-10.285c.45-.45 1.048-.697 1.684-.697.638 0 1.235.247 1.684.697.45.45.697 1.048.697 1.683 0 .635-.247 1.235-.697 1.684z" />
            </svg>
        </span>

    </summary>

    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded shadow-lg w-[400px] h-[310px] p-6 relative flex items-center justify-evenly">
            <form method="POST" action="{{ route('workspace.update', $workspace) }}" class="w-full">
                @csrf
                @method('PUT')
                <div class="mb-3 minor-title">
                    edit workspace</div>
                <div class="mb-2">
                    <label for="name" class="block text-sm font-medium text-slate-600">name</label>
                    <input type="text" name="name" id="name" value="{{ $workspace->name }}"
                        class="w-full border px-3 py-2 rounded" required>
                </div>
                <div class="mb-2">
                    <label for="description" class="block text-sm font-medium text-slate-600">description</label>
                    <textarea name="description" id="description" rows="2" class="w-full border px-3 py-2 rounded" required>{{ $workspace->description }}</textarea>
                </div>
                <div class="flex justify-end space-x-2 mt-4">
                    <button type="submit" class="text-sm text-white bg-blue-600 hover:bg-blue-700 px-1 py-1 rounded">
                        update
                    </button>
                    <button type="reset" onclick="this.closest('details').removeAttribute('open')"
                        class="text-sm text-slate-500 hover:underline">
                        cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</details>
