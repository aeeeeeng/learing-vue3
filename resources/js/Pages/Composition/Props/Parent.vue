<script setup>
/**
 * Props
 *
 * props adalah parameter yang dilempar dari parent component ke child component
 * didalam child component sebaiknya data sudah tidak diubah-ubah
 * pengelolaan data dilakukan di parent component
 */
import { ref } from "vue";
import Child from './Child.vue'

const greeting = ref('Hello from parent');
</script>


<template>
    <Child :msg="greeting"/>
</template>
