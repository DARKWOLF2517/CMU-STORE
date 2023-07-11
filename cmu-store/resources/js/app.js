
import './bootstrap';

import { createApp } from 'vue';
import studOrgEventsDashboard from './components/Events/StudOrgDashboardEvents.vue';
import addEvent from './components/Events/AddEventModal.vue';
import event_card from './components/Events/EventCard.vue';
import sidenavbtn from './components/SideNav/SideNavButton.vue';


const app = createApp({});
app.component('event-card',event_card);
app.component('side-nav-button',sidenavbtn);
app.component('event-dashboard', studOrgEventsDashboard);
app.component('add-event', addEvent);
app.mount('#app');