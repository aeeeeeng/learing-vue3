<script>
/**
 * Watch
 *
 * bagian dari fitur utama
 * yang memungkinkan untuk memantau perubahan pada data
 * dan menjalankan logika tertentu ketika data tersebut berubah.
 *
 * contoh dibawah ketika ada perubahan pada state todoID
 * maka akan mennjalankan function fetchData
 */

export default {
    data() {
        return {
            todoID: 1,
            todoData: null
        }
    },
    methods: {
        async fetchData() {
            this.todoData = null
            const res = await fetch(
                `https://jsonplaceholder.typicode.com/todos/${this.todoID}`
            )
            this.todoData = await res.json()
        }
    },
    mounted() {
        this.fetchData()
    },
    watch: {
        todoID() {
            this.fetchData()
        }
    }
}
</script>

<template>
    <p>todoID is : {{ todoID }}</p>
    <button @click="todoID++" :disabled="!todoData">Fetch next todo</button>
    <p v-if="!todoData">Loading...</p>
    <pre v-else>{{ todoData }}</pre>
</template>
