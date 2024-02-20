<script>
// State yang dapat men-trigger pembaruan ketika berubah disebut reactive
// Contoh dibawah:

// Deklarasi state reactive menggunakan data() component option
// Pengembalian berupa object
export default {
    data() {
        return {
            message: 'Hello World'
        }
    }
}
</script>

<template>
    <h1>{{ message }}</h1>
</template>
