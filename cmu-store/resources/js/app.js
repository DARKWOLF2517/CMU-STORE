
import './bootstrap';

import { createApp } from 'vue';
import navigation from './components/navigation_bar.vue';
import modal from './components/modal.vue';
import event_card from './components/Events/EventCard.vue';
import sidenavbtn from './components/SideNav/SideNavButton.vue';


const app = createApp({});
app.component('navigation_bars', modal);
app.component('event-card',event_card);
app.component('side-nav-button',sidenavbtn);
app.mount('#app');



// const modals = createApp({});
// modals.component('modal-form', modal);
// modals.mount('#app');



// const tests = createApp({});
// tests.component('test', test);
// tests.mount('#test');
