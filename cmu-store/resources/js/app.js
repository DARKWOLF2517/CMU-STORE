import './bootstrap';

import Alpine from 'alpinejs';

// vue js integration
import { createApp } from "vue/dist/vue.esm-bundler.js";
import example from "./components/example.vue";
const app = createApp({
    components : {
        example,
      
    }
})

app.mount("#app");
// end of vue js integration
window.Alpine = Alpine;

Alpine.start();
