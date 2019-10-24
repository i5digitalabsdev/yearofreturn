/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('user-roles', require('./components/Role'));
Vue.component('user-permission', require('./components/Permission'));
Vue.component('list-permission', require('./components/ListPermission'));
Vue.component('news-cut', require('./components/NewsCut'));
Vue.component('users', require('./components/User'));
Vue.component('gallery', require('./components/Gallery'));
import userRole from './controls'
import './urls'
const app = new Vue({
    el: '#app',
});
