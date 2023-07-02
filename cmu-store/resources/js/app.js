
import './bootstrap';

import { createApp } from 'vue';
import navigation from './components/navigation_bar.vue';



const app = createApp({});



app.component('navigation_bars', navigation);



app.mount('#app');
