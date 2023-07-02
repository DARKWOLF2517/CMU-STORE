
import './bootstrap';
import '../css/custom_css/allmedia.css';
import '../css/custom_css/Login.css';
import '../css/custom_css/NavBars.css';
import '../css/custom_css/SOAttendance.css';
import '../css/custom_css/SODashboard.css';
import '../css/custom_css/SOEvents.css';
import '../css/custom_css/SOListofMembers.css';
import '../css/custom_css/stylesheet.css';
// import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
// import 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
// import 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css';
// import 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
// import 'https://getbootstrap.com/docs/5.0/examples/sidebars/';

import { createApp } from 'vue';



const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

app.mount('#app');
