<!DOCTYPE html>
<html>
  <head>
    <!-- jQuery UIKit使う時にJQuery必要 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- UI Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/js/uikit.min.js"></script>

    <!-- Codemirror and marked dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.38.0/codemirror.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.38.0/codemirror.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.38.0/mode/markdown/markdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.38.0/addon/mode/overlay.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.38.0/mode/xml/xml.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.38.0/mode/gfm/gfm.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.5/marked.js'></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML editor CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/css/components/htmleditor.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/js/components/htmleditor.js"></script>

  </head>
  <body>
    <form action="/homes/{{ $item->id }}" method="post">
      <textarea data-uk-htmleditor="{markdown:true}" value="{{ $item->title }}"></textarea>
      <input style="float: left;" type="submit" value="Update Member">
    </form>
  </body>
</html>
