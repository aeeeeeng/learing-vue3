<script>
/**
 * Props
 *
 * props adalah parameter yang dilempar dari parent component ke child component
 * didalam child component sebaiknya data sudah tidak diubah-ubah
 * pengelolaan data dilakukan di parent component
 */
import Child from './Child.vue'
export default {
    components: {
        Child
    },
    data() {
        return {
            greeting: "hello from parent"
        }
    }
}
</script>

<template>
    <Child :msg="greeting"/>
</template>
