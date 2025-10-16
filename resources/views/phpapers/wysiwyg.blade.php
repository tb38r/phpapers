<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="editor"></div>

<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>

<script>
  const editor = new toastui.Editor({
    el: document.querySelector('#editor'),
    height: '800px',
    initialEditType: 'wysiwyg', 
    previewStyle: 'vertical'
  });

  // To get Markdown content for saving:
  function getMarkdown() {
    return editor.getMarkdown();
  }
</script>
</body>
</html>