import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'

require('./bootstrap')

Vue.use(VueRouter)

import RegisterPlayer from './components/RegisterPlayer'
import CreateMatch from './components/CreateMatch'
import Dashboard from './components/Dashboard'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            name: 'Dashboard',
            component: Dashboard
        },
        {
            path: '/register-player',
            name: 'RegisterPlayer',
            component: RegisterPlayer,
        },
        {
            path: '/create-match',
            name: 'CreateMatch',
            component: CreateMatch,
        },
    ],
});


const app = new Vue({
    el: '#app',
    router,
});
