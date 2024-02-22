<script>
export default {
    emits: ['response'],
    created() {
        this.$emit('response', 'hello from child')
    }
}
</script>

<template>
    <h2>Child Component</h2>
</template>
