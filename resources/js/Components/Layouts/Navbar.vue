<script setup>
import { computed, ref } from 'vue';
import { router } from '@inertiajs/vue3'
import DxMenu from 'devextreme-vue/menu';
import DxCheckBox from 'devextreme-vue/check-box';
import DxSelectBox from 'devextreme-vue/select-box';
import service from './MenuData';

const showSubmenuModes = [, {
  name: 'onClick',
  delay: { show: 0, hide: 300 },
}];
const menus = ref(service.getMenus());
const selectedFirstSubmenuModes = ref(showSubmenuModes[1].name);

function itemClick(e) {
  if (e.itemData.link) {
    router.visit(e.itemData.link, { preserveScroll: true  })
  }
}
</script>

<template>
  <div class="form">
    <div>
      <div class="label">Explore DevExtreme with Vue + Inertia</div>
      <DxMenu
        :data-source="menus"
        :show-first-submenu-mode="{
            name: 'onHover',
            delay: { show: 0, hide: 500 },
        }"
        :orientation="`horizontal`"
        :hide-submenu-on-mouse-leave="true"
        display-expr="name"
        @item-click="itemClick"
      />

    </div>
  </div>
</template>

<style scoped>
.form {
  margin-left: 3px;
}

.form > div:first-child {
  margin-right: 320px;
}

.label {
  font-size: 22px;
  padding-bottom: 24px;
}

#product-details {
  width: 400px;
  height: 400px;
  margin: 20px auto 0;
}

#product-details > img {
  height: 300px;
  width: 400px;
}

#product-details > .name {
  text-align: center;
  font-size: 20px;
}

#product-details > .price {
  text-align: center;
  font-size: 24px;
}

.dark #product-details > div {
  color: #f0f0f0;
}

.options {
  padding: 20px;
  position: absolute;
  bottom: 0;
  right: 0;
  width: 260px;
  top: 0;
  background-color: rgba(191, 191, 191, 0.15);
}

.caption {
  font-size: 18px;
  font-weight: 500;
}

.option {
  margin-top: 10px;
}

.hidden {
  visibility: hidden;
}
</style>
