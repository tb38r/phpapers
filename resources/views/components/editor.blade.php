@props(['workspaceId', 'paperId', 'content'])

<div id="editor" class="mx-auto w-[80%] mt-8"></div>

<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>

<script>
  const editor = new toastui.Editor({
    el: document.querySelector('#editor'),
    height: '800px',
    initialEditType: 'wysiwyg',
    previewStyle: 'vertical'
  });

  editor.setHTML(@json($content));

  setInterval(() => {
    const content = editor.getMarkdown();

    fetch(`/workspace/{{ $workspaceId }}/paper/{{ $paperId }}/save`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ content })
    });
  }, 10000);
</script>
