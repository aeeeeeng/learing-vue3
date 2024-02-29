<script setup>
import { Link } from '@inertiajs/vue3'
import Navbar from '../Components/Layouts/Navbar.vue'

</script>

<template>
  <main>
    <header>
      <Navbar/>
    </header>
    <section>
      <slot />
    </section>
  </main>
</template>
