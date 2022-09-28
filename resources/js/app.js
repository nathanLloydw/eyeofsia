require('./bootstrap')

import { createApp } from 'vue'
import component from "./components/component.vue";
import '../css/app.css';

const app = createApp({})

app.component('component', component)

app.mount('#app')


window.onload = function()
{
    const btn = document.querySelector("#menu-btn");
    const menu = document.querySelector("#menu");

    btn.addEventListener("click", () => {
        console.log('click');
        menu.classList.toggle("hidden");
    });
}
