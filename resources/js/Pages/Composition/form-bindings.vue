<script setup>
import { ref } from "vue";

/**
 * Form Bindings
 *
 * memiliki 2 cara:
 * 1. dengan cara konvenional menambahkan listener @input di komponent
 * 2. dengan cara singkat, hanya cukup dengan v-model
 *
 * keduanya sama sama mengelola state reaktif
 */


const text = ref('')
const textSorthand = ref('')

function onInput(e) {
    text.value = e.target.value
}
</script>

<template>
    <input type="text" :value="text" @input="onInput" placeholder="Type here">
    <br>
    <p>{{ text }}</p>
    <input type="text" v-model="textSorthand" placeholder="With sorthand way">
    <br>
    <p>{{ textSorthand }}</p>
</template>
