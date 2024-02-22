<script setup>
const emit = defineEmits(["response"])
emit('response', 'Hello from child')
</script>

<template>
    <h2>Child Component</h2>
</template>
