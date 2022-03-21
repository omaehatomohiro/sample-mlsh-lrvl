require('./bootstrap');

import {createApp} from 'vue';
window.createApp = createApp;

import HomeConponent from './HomeConponent.vue';

const app = createApp({})
app.component('test-vue', HomeConponent);
app.mount('#app')
