<script setup>
/**
 * Emits
 *
 * kebalikan dari props
 * data dikirim child component ke parent component
 */
import { ref } from "vue"
import Child from './Child.vue'

const childMsg = ref("No child message yet")

</script>

<template>
    <Child @response="(msg) => childMsg = msg"/>
    <p>{{ childMsg }}</p>
</template>
