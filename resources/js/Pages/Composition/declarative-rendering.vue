<script setup>
// State yang dapat men-trigger pembaruan ketika berubah disebut reactive
// Contoh dibawah:
import { reactive } from "vue"
import { ref } from 'vue'

// reactive() hanya bekerja untuk object (arrays, Map, Set, etc)
const counter = reactive({
    count: 0
})
console.log(counter.count); // 0
counter.count++

// ref() dapat mengambil jenis nila apapun & membuat object bernama .value
const message = ref('Hello World!')
console.log(message.value); // Hello World!
message.value = 'Changed'

</script>

<template>
  <!-- message tidak perlu menggunakan value lagi, karena sudah otomatis dibuka setelah masuk template -->
  <h1>{{ message }}</h1>

  <!-- script didalam kurung kumis masih bisa dikelola dengan javascript expression -->
  <p>{{ message.split('').reverse().join('') }}</p>

  <p>count is: {{ counter.count }}</p>
</template>
