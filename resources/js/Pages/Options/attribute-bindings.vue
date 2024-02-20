<script>
export default {
    data() {
        return {
            titleClass: 'title'
        }
    }
}
</script>

<template>
    <!-- attribute yang diawali dengan v- adalah bagian dari syntax template vue -->
    <!-- ada cara untuk menyingkat prefix v- dengan mengawali setelah titik dua (:id) -->
    <p v-bind:class="titleClass">Red text</p>
    <h1 :class="titleClass">Make me red!</h1>
</template>

<style>
.title {
    color: red;
}
</style>
