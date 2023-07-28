
import './bootstrap';

import { createApp } from 'vue';
//all
import SideNavbtn from './components/SideNav/SideNavButton.vue';
import LoginForm from './components/LoginForm/LoginForm.vue';

//org module
import EventsDashboard from './components/StudentOrg/Dashboard/DashboardEvents.vue';
import EventsCount from './components/StudentOrg/Dashboard/DashboardCard.vue';
import CalendarCard from './components/StudentOrg/Dashboard/CalendarCard.vue';
import EventCard from './components/StudentOrg/Events/EventCard.vue';
import QrScanner from './components/StudentOrg/Attendance/QrScanner.vue';
import EventAttendanceList from './components/StudentOrg/Events/AttendanceEventList.vue';
//student module 
import StudentAttendance from './components/StudentUser/Attendance/StudentAttendance.vue';
import StudentEventModal from './components/StudentUser/Events/EventModal.vue';
import StudentProfile from './components/StudentUser/Profile/StudentProfile.vue';

const app = createApp({});

//all
app.component('side-nav-button',SideNavbtn);
app.component('login-form',LoginForm);

//org module
app.component('event-card',EventCard);
app.component('event-dashboard', EventsDashboard);
app.component('event-count', EventsCount);
app.component('dashboard-calendar', CalendarCard);
app.component('qr-scanner', QrScanner);
app.component('event-attendance-list', EventAttendanceList);

//student module
app.component ('student-attendance',StudentAttendance);
app.component ('student-event-card', StudentEventModal);
app.component ('student-profile', StudentProfile);

app.mount('#app');