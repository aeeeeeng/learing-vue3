<script setup>
import { ref } from "vue";

const count = ref(0)
const titleClass = ref('title-black')

function increment() {
    count.value++
}

function makeRedTitle() {
    // Update state component
    titleClass.value = 'title-red'
}
</script>

<template>
    <!-- event listner dapat dilakukan dengan v-on (v-on:click)
    cara singkatnya bisa menggunakan @ (@click) -->
    <p :class="titleClass">Title Dynamic Colors</p>
    <button @click="increment"> count is: {{ count }} </button>
</template>

<style scoped>
    .title-black {
        color: black;
    }

    .title-red {
        color: red;
    }
</style>
