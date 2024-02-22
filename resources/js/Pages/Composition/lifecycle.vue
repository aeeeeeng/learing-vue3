<script setup>
/**
 * REF
 *
 * ref digunakan untuk memberi nama atau mereferensikan elemen atau komponen Vue tertentu dalam template.
 * Ketika elemen atau komponen diberi atribut ref,
 * Vue akan membuatkan referensi ke elemen tersebut yang bisa diakses dalam kode JavaScript Vue.
 */

/**
 * Lifecycle
 *
 * Dalam Vue 3, terdapat beberapa lifecycle hooks yang tersedia.
 * Dalam konteks Vue 3 Composition API, kita menggunakan hooks dari modul Vue
 * bukan lagi menggunakan lifecycle hooks seperti pada Vue 2
 * dalam vu3 ada beberapa lifecycle yaitu:
 * onBeforeMount, onMounted, onBeforeUpdate, onUpdated, onBeforeUnmount, onUnmounted
 */

import { onMounted, ref } from "vue";

const pElementRef = ref(null)

onMounted(() => {
    pElementRef.value.textContent = 'Mounted!'
})

</script>

<template>
    <p ref="pElementRef">Hello</p>
</template>
