<script setup>
import { ref } from 'vue'
import DxButton from 'devextreme-vue/button'

const count = ref(10)
</script>

<template>
    <h1>{{ count }}</h1>
    <DxButton
        text="Click for reactive variable"
        @click="count++"
    />
    <Link href="/composition/watch" as="button" type="button">Go to Watch Component</Link>
</template>

<style scoped>
button {
    font-weight: bold;
}
</style>
