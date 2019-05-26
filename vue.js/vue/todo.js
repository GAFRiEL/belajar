Vue.component('todo', {
    template: `
    <div>
    <h3>{{ title }}</h3>
        <form class="input-group" @submit.prevent="addTodo">
            <input v-model="newTodo" type="text" class="form-control" name="newToDo" id="newToDo">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="submit" name="button">Add</button>
            </div>
        </form>
        <div class="btn-group mt-md-1" role="group" aria-label="Basic example">
            <button class="btn btn-secondary" @click="allDone">All Done</button> <br>
            <button class="btn btn-secondary" type="button" @click="clearAll">Clear All</button>
        </div>
        <!-- <ul>
            <li class="mt-md-1 w-100" v-for="todo in todos">
                <span class="col-md-4" :class="{ done: todo.done}">{{ todo.title }}</span>
                <input class="text-right" type="checkbox" v-model="todo.done">
                <button class=" text-right btn btn-secondary" type="button" @click="removeTodo(todo)">clear</button>
            </li>
        </ul> -->
        <table class="w-100">
            <tr v-for="todo in todos">
                <td><span class="col-auto" :class="{ done: todo.done}">{{ todo.title }}</span></td>
                <td class="text-right">
                    <input type="checkbox" v-model="todo.done">
                    <button class="btn btn-secondary ml-md-2" type="button" @click="removeTodo(todo)">clear</button>
                </td>
            </tr>
        </table>
    </div>
    `,
    data() {
        return {
        title: 'My List',
        newTodo: '',
        todos: []
    }
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
})
const todo = new Vue({
    el: '#todo'
});