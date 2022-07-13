require('./bootstrap');

import Vue from "vue";
import router from './routes';
import VueRouter from 'vue-router';
import Index from './index';

window.Vue = require('vue').default;

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    components: {
        "index": Index,
    },
});
