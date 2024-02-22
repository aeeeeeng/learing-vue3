<script>
/**
 * Slot
 *
 * Fungsi slot sama seperti props
 * tetapi yang dikirimkan berupa content
 * child hanya bisa menangkap content didalam slot
 * tidak dapat kelola karena langsung di render
 *
 */

import Child from './Child.vue'
export default {
    components: {
        Child
    },
    data() {
        return {
            msg: 'Hello from parent'
        }
    }
}
</script>


<template>
    <Child>
        <h1>{{ msg }}</h1>
    </Child>
</template>
