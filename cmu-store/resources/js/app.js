
import './bootstrap';

import { createApp } from 'vue';
import navigation from './components/navigation_bar.vue';
import modal from './components/modal.vue';
import test from './components/test.vue';



// const app = createApp({});
// app.component('navigation_bars', navigation);
// app.mount('#app');



const modals = createApp({});
modals.component('modal-form', modal);
modals.mount('#app');



// const tests = createApp({});
// tests.component('test', test);
// tests.mount('#test');
