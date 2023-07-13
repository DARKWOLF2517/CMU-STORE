
import './bootstrap';

import { createApp } from 'vue';
import EventsDashboard from './components/Dashboard/DashboardEvents.vue';
import EventsCount from './components/Dashboard/DashboardCard.vue';
import CalendarCard from './components/Dashboard/CalendarCard.vue';
import addEvent from './components/Events/AddEventModal.vue';
import event_card from './components/Events/EventCard.vue';
import sidenavbtn from './components/SideNav/SideNavButton.vue';


const app = createApp({});
app.component('event-card',event_card);
app.component('side-nav-button',sidenavbtn);
app.component('event-dashboard', EventsDashboard);
app.component('event-count', EventsCount);
app.component('dashboard-calendar', CalendarCard);
app.component('add-event', addEvent);
app.mount('#app');