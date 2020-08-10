require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import { routes } from './routes'

window.Vue = require('vue');

Vue.use(VueRouter)

const router = new VueRouter({
    mode : 'history',
    routes
})

// Vue.component('container-vue', require('./components/TheContainer.vue').default);
Vue.component('my-header', require('./components/HeaderComponent.vue').default);
Vue.component('aside-component', require('./components/AsideComponent.vue').default);
Vue.component('breadcrumb-component', require('./components/BreadcrumbComponent.vue').default);
Vue.component('my-footer', require('./components/FooterComponent.vue').default);

const chat = new Vue({
    el: '#app',
    router
});
