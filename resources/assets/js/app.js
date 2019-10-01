
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
  el: '#app',
  data: {
    // new_todo(ビューから送られるデータの入れ物)追加
    new_todo: "",
    todos: [] //←TODOを格納するための配列を用意
  },
  methods: {
    fetchTodos: function(){ //←axios.getでTODOリストを取得しています
      // thenはgetが成功した場合 resを引数にとったコールバック変数を実行できる
      axios.get('/api/get').then((res)=>{
        // res.dataがレスポンス
        this.todos = res.data //←取得したTODOリストをtodosに格納
      })
    },
    addTodo: function () {
      axios.post('/api/add', {
        // this.new_todoをtitleに格納して送ってみる
        title: this.new_todo
      }).then((res) => {
        this.todos = res.data
        this.new_todo = ""
      })
    },
    // ビューでdeleteTodoの引数として指定したtodo.idがtask_idの中に入る
    deleteTodo: function (task_id) {
      axios.post('/api/del', {
        // 引数はtask_idを指定している
        id: task_id
      }).then((res) => {
        this.todos = res.data
      })
    }
  },
  created() {  //←インスタンス生成時にfetchTodos()を実行したいので、createdフックに登録します。
    this.fetchTodos()
  },

});
