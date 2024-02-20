<script setup>
import { ref } from 'vue'
const count = ref(10)
</script>

<template>
    <h1>{{ count }}</h1>
    <button @click="count++">Click for reactive variable</button>
</template>

<style scoped>
button {
    font-weight: bold;
}
</style>
