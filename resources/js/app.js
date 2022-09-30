require('./bootstrap')

import { createApp } from 'vue'
import component from "./components/component.vue";
import '../css/app.css';
import navigation_menu from './scripts/navigation_menu';
import navigation_shrink from './scripts/navigation_shrink';

const app = createApp({})

app.component('component', component)

app.mount('#app')


