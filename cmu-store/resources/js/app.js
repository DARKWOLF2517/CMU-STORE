
import './bootstrap';

import { createApp } from 'vue';
import EventsDashboard from './components/StudentOrg/Dashboard/DashboardEvents.vue';
import EventsCount from './components/StudentOrg/Dashboard/DashboardCard.vue';
import CalendarCard from './components/StudentOrg/Dashboard/CalendarCard.vue';
import addEvent from './components/StudentOrg/Events/AddEventModal.vue';
import event_card from './components/StudentOrg/Events/EventCard.vue';
import sidenavbtn from './components/StudentOrg/SideNav/SideNavButton.vue';

//student module
import student_attendance from './components/StudentUser/StudentAttendance.vue';

const app = createApp({});
app.component('event-card',event_card);
app.component('side-nav-button',sidenavbtn);
app.component('event-dashboard', EventsDashboard);
app.component('event-count', EventsCount);
app.component('dashboard-calendar', CalendarCard);
app.component('add-event', addEvent);

//student module
app.component ('student-attendance',student_attendance);


app.mount('#app');