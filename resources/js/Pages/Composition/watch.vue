<script setup>

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

import { ref, watch } from "vue";

const todoID = ref(1)
const todoData = ref(null)

async function fetchData()
{
    todoData.value = null
    const res = await fetch(
        `https://jsonplaceholder.typicode.com/todos/${todoID.value}`
    )
    todoData.value = await res.json()
}

fetchData()

watch(todoID, fetchData);
</script>

<template>
    <p>Todo ID: {{ todoID }}</p>
    <button @click="todoID++" :disabled="!todoData">Fetch next todo</button>
    <p v-if="!todoData">Loading...</p>
    <pre v-else>{{ todoData }}</pre>
</template>
