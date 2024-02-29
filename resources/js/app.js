import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import themes from 'devextreme/ui/themes'
import 'devextreme/dist/css/dx.light.css';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    themes.initialized(() => createApp({ render: () => h(App, props) })
        .use(plugin)
        .mount(el))
  },
})
