@props(['workspaceId', 'paperId', 'content'])

<x-layout>
<div id="editor" class="mx-auto w-[80%] mt-8"></div>

<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>

<script>
    const editor = new toastui.Editor({
        el: document.querySelector('#editor'),
        height: '600px',
        initialEditType: 'wysiwyg',
        hideModeSwitch: true,
        toolbarItems: [
            ['heading', 'bold', 'italic', 'strike'],
            ['hr', 'quote'],
            ['ul', 'ol', 'task'],
            ['table', 'link'],
            ['code', 'codeblock']
        ]
    });

    editor.setHTML(@json($content));

    setInterval(() => {
        const content = editor.getHTML();

        fetch(`/workspace/{{ $workspaceId }}/paper/{{ $paperId }}/save`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                content
            })
        });
    }, 10000);
</script>
</x-layout>