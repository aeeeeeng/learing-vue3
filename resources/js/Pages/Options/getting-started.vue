<script setup>
    import { DxBox, DxItem } from 'devextreme-vue/box'
    import Layout from '../Layout.vue'
</script>
<template>
    <Layout>
        <DxBox
            :height="75"
            direction="row"
            width="100%"
        >
            <DxItem
                :ratio="1"
            >
                <template #default>
                    <div class="rect demo-dark">ratio = 1</div>
                </template>
            </DxItem>
            <DxItem
                :ratio="2"
            >
                <template #default>
                    <div class="rect demo-light">ratio = 2</div>
                </template>
            </DxItem>
            <DxItem
                :ratio="1"
            >
                <template #default>
                    <div class="rect demo-dark">ratio = 1</div>
                </template>
            </DxItem>
        </DxBox>
        <h1>Hello World</h1>
    </Layout>
</template>
<style scoped>
.rect {
  text-align: center;
  font-size: 30px;
  padding-top: 10px;
  height: 100%;
}

.demo-light {
  background: rgba(245, 229, 166, 0.5);
}

.demo-dark {
  background: rgba(148, 215, 199, 0.5);
}

.demo-dark.header {
  background: rgba(243, 158, 108, 0.5);
}

.demo-dark.footer {
  background: rgba(123, 155, 207, 0.5);
}

.small {
  height: 50px;
  border: 1px solid lightgray;
}
</style>
