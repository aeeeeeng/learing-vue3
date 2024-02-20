# Learning VUE3

Didalam VUE3 ada 2 jenis gaya penulisan, yaitu Composition & Options. 


## Composition

- berpusat pada state variable reaktif di scope tiap function, dapat menyusun state dari beberapa fungsi secara bersamaan.
- gunakan Composition API + single file compnent = jka berencana membangun dalam kompleksitas tinggi (Rekomendasi dari vue)
- Composition biasanya ditandai dengan tag `setup` di script `<script setup>`
```javascript
  <script setup>

   import { ref } from vue

   const text = ref('Hello World')

  </script>

  <template>
    <h1>{{ text }}</h1>
  </template>
```

## Options

- berpusat pada componen instance, (this) berbasis pada object oriented.
- gunakan Options API = jika tidak menggunakan alat build, atau menggunakan vue dalam kompleksitas rendah
- Options ditandai dengan awalan `export default {}`
``` javascript
    <script>
    export default {
        data(): {
            return {
                text: 'Hello World'
            }
        }
    }
    </script>

    <template>
        <h1>{{ text }}</h1>
    </template>
```
