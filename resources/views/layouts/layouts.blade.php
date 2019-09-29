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
      <!-- 入力フォーム -->
      <form v-on:submit.prevent="addItem" class="form-group">
          <div class="form-group">
              <div class="input-group">
                  <!-- v-modelでテキストの値を操作 -->
                  <input type="text" v-model="text" v-on:keyup.enter="changeItems" ref="editor" class="form-control">
                  <!-- setItemで追加 {{changeButtonText}}は入力の内容により変わる -->
                  <span class="input-group-btn"><button v-on:click="setItems" class="btn btn-primary" type="submit">@{{changeButtonText}}</button></span>
              </div>
          </div>
      </form>

      <hr>

      <!--ループ処理-->
      <ul class="list-group">
          <!-- キーで指定したインデックスがVueに送られ、editIndexの値になる -->
          <li class="list-group-item" v-for="(item, index) in items" v-bind:key="index">
              @{{ item }}
              <span class="pull-right">
                  <!-- edit,remove両方でインデックスを渡す -->
                  <button class="btn btn-xs btn-info" v-on:click="edit(index)">
                　     編集
            　    </button>

            　    <button class="btn btn-xs btn-warning" v-on:click="remove(index)">
            　         削除
            　    </button>
            　</span>
        　　</li>
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
