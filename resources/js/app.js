require('./bootstrap')

import { createApp } from 'vue'
import component from "./components/component.vue";
import '../css/app.css';

import './scripts/navigation_menu';
import './scripts/navigation_shrink';
import './scripts/reactive_navigation_hero';

const app = createApp({})

app.component('component', component)

app.mount('#app')


