const todo = new Vue({
    el: '#todo',
    data: {
        title: 'My List',
        newTodo: '',
        todos: []
    },
    methods: {
        addTodo() {
            this.todos.push({
                title: this.newTodo,
                done: false
            });
            this.newTodo = ''
        },
        removeTodo(todo) {
            this.todos.splice(todo, 1);
        },
        allDone() {
            this.todos.forEach(todo => {
                todo.done = true;
            });
        },
        clearAll() {
            this.todos = [];
        }
    }
});