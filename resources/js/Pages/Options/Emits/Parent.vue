<script>
/**
 * Emits
 *
 * kebalikan dari props
 * data dikirim child component ke parent component
 */
import Child from './Child.vue'
export default {
    components: {
        Child
    },
    data() {
        return {
            childMsg: 'No message child yet'
        }
    }
}
</script>

<template>
    <Child @response="(msg) => childMsg = msg"/>
    <p>{{ childMsg }}</p>
</template>
