new Vue({
  el: '#app',
  data: {
    // newItemに一時収納、todosに恒久的に収納
    newItem: '',
    todos: []
  },
  methods: {
    addItem: function(){
      // this.todosで場所指定、pushでtodosに入れる
      this.todos.push(this.newItem);
      // newItemは空にする
      this.newItem = '';
    },
    // 削除
    deleteItem: function(todo) {
      // todos配列の todo から key を取得
      var index = this.todos.indexOf(todo);
      // key番目から１つ削除
      this.todos.splice(index, 1);
    }
  }
})
