new Vue({
  el: '#app',
  data: {
    text: "", // 編集覧の値

    editIndex: -1, // 現在編集している要素のインデックス
                   // 編集状態でない場合は-1を設定

    items: [       // 要素のリストをデフォルトで3つ設定
        "タスク１",
        "タスク２",
        "タスク３"
    ]
  },
  computed: {
    changeButtonText() {
        return this.editIndex === -1 ? "追加" : "編集";
    }
  },
  methods: {

    // 送信ボタンをクリックしたら以下を実行
    setItems() {
        if(this.editIndex === -1) {
            // 配列に要素を追加 一番後ろに追加
            this.items.push(this.text);
        } else {
            // 編集（指定位置から指定した要素数を削除し新しい要素に入れ替え）
            // this.itemsのthis.Index番目から1つ目をthis.textに変更する
            this.items.splice(this.editIndex, 1, this.text);
        }
        // 最後に編集状態を解除
        this.cancel();
    },

    // クリア
    cancel() {
        this.text = ""; //編集覧の状態をクリア
        this.editIndex = -1;
    },

    // 編集（指定した要素を編集状態に設定）
    edit(index) {
        this.editIndex = index;
        this.text = this.items[index];
        this.$refs.editor.focus(); // フォーカスを設定
    },

    // 削除
    remove(index) {
        this.items.splice(index, 1);
    }
  }
})
