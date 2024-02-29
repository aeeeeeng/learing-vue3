<script setup>
import Layout from './Layout.vue'
import { Head } from '@inertiajs/vue3'

defineProps({ test: Object })
</script>

<template>
  <Layout>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p>Hello {{ test.a }}, welcome to your first Inertia app!</p>
  </Layout>
</template>
