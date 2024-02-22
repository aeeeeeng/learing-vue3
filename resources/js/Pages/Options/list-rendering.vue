<script>
let id = 0
export default {
    data() {
        return {
            newTodo: '',
            todos: [
                {id: id++, text: 'learn HTML'},
                {id: id++, text: 'learn Javascript'},
                {id: id++, text: 'learn VUE'},
            ]
        }
    },
    methods: {
        addTodo() {
            this.todos.push(
                {id: id++, text: this.newTodo}
            )
            this.newTodo = ''
        },
        removeTodo(todo) {
            this.todos = this.todos.filter(t => t !== todo)
        }
    }
}
</script>

<template>
    <form @submit.prevent="addTodo">
        <input type="text" v-model="newTodo">
        <button>Add Todo</button>
    </form>
    <ul>
        <li v-for="todo in todos" :key="todo.id">
            {{ todo.text }}
            <button @click="removeTodo(todo)">X</button>
        </li>
    </ul>
</template>
