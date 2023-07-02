
import './bootstrap';

import { createApp } from 'vue';
import navigation from './components/navigation_bar.vue';
import modal from './components/modal.vue';



const app = createApp({});
app.component('navigation_bars', navigation);
app.mount('#app');



const modals = createApp({});
modals.component('modal', modal);
modals.mount('#modal_vue');
