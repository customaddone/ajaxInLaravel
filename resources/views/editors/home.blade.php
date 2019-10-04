<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/codemirror.css') }}">
    <script src="{{ asset('/js/codemirror.js') }}"></script>
    <script src="{{ asset('/js/javascript.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <textarea id="editor_js" rows="30" cols="50"></textarea>

    <script type="text/javascript">
        var editor = CodeMirror.fromTextArea(document.getElementById('editor_js'), {
            mode: "javascript",
            lineNumbers: true,
            indentUnit: 4
        });
        editor.save();
        var text = $("#editor_js").val();
    </script>
</body>
</html>
