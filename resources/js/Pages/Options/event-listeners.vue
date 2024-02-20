<script>
export default {
    data() {
        return {
            count: 0
        }
    },
    methods: {
        increment() {
            this.count++
        }
    }
}
</script>
<template>
    <!-- event listner dapat dilakukan dengan v-on (v-on:click)
    cara singkatnya bisa menggunakan @ (@click) -->
    <button @click="increment">count is: {{ count }}</button>
</template>
