<html>
<head>
  <title>RailsTutorial</title>
  <!-- Vueのインストールを行う -->
  <script src="https://unpkg.com/vue@2.5.17"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<!-- テンプレート用 -->
<body>
  <div id="app">
      <!-- `greet` は、あらかじめ定義したメソッドの名前 -->
      <button v-on:click="greet">Greet</button>
  </div>
  <!-- ４　npm run devでソースをコンパイルする
       ５  view内でasset('/js/()')でassetを読み込む -->
  <script src="{{ asset('/js/samplevue.js') }}"></script>
  <div class="container">
    <header>
      @yield('header')
    </header>
    <main>
      @yield('main')
    </main>
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    <footer>
      @yield('footer')
    </footer>
  </div>
</body>
</html>
