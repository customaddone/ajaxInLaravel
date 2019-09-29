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
      <form v-on:submit.prevent="addItem" class="form-group">
          <div class="form-group">
              <div class="input-group">
                  <input type="text" v-model="newItem" class="form-control">
                  <span class="input-group-btn"><button class="btn btn-primary" type="submit">送信</button></span>
              </div>
          </div>
      </form>
      <ul class="list-group">
          <li class="list-group-item" v-for="todo in todos">@{{ todo }}</li>
      </ul>
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
