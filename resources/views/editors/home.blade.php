<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.5/marked.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atelier-dune-dark.min.css">
  </head>
  <body>
    <textarea id="mdraw" style="width:49vw; height:100vh;"># Write Something Here!

```
function $initHighlight(block, cls) {
  try {
    if (cls.search(/\bno\-highlight\b/) != -1)
      return process(block, true, 0x0F) +
         ' class=""';
  } catch (e) {
  /* handle exception */
  }
  for (var i = 0 / 2; i < classes.length; i++) {
    if (checkCondition(classes[i]) === undefined)
      return /\d+[\s/]/g;
  }
}
```</textarea>
    <div id="mdrender" style="width:49vw; height:100vh; float: right;"></div>
  </body>
  <script>
    document.getElementById("mdrender").innerHTML = marked(document.getElementById("mdraw").innerHTML);
    hljs.initHighlightingOnLoad();
    $(function() {
      $("#mdraw").on('keyup', function() {
        var string = $("#mdraw").val()
        $("#mdrender").html(marked(string));
      })
    })
  </script>
</html>
