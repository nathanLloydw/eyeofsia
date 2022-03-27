require('./bootstrap')

import { createApp } from 'vue'
import home from "./components/home.vue";
import '../css/app.css';

const app = createApp({})

app.component('home', home)

app.mount('#app')
