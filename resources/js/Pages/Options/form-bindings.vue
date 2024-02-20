<script>

/**
 * Form Bindings
 *
 * memiliki 2 cara:
 * 1. dengan cara konvenional menambahkan listener @input di komponent
 * 2. dengan cara singkat, hanya cukup dengan v-model
 *
 * keduanya sama sama mengelola state reaktif
 */

export default {
    data() {
        return {
            text: '',
            textSortHand: ''
        }
    },
    methods: {
        onInput(e) {
            this.text = e.target.value
        }
    }
}

</script>

<template>
    <input type="text" :value="text" @input="onInput" placeholder="Type Here">
    <p>{{ text }}</p>
    <br>
    <input type="text" v-model="textSortHand" placeholder="With Sorthand Way">
    <p>{{ textSortHand }}</p>
</template>
