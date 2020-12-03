 /**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import moment from 'moment';
import { Form, HasError, AlertError } from 'vform'


//sweet alert
import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })

  window.Toast = Toast;
  

window.Form = Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//progress bar
import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, options)
const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
  }

let routes = [
     { path: '/dashboard', component: require('./components/Dashboard.vue').default},
     { path: '/profile', component: require('./components/Profile.vue').default},
     { path: '/users', component: require('./components/Users.vue').default}
    ]

    const router = new VueRouter({
        mode: 'history',
        routes
    })

    Vue.filter('up-Text', function(value){
        return value.charAt(0).toUpperCase() + value.slice(1);
    });

    Vue.filter('myDate', function(created){
       return moment(created).format('MMMM Do YYYY');
    });

    window.Fire = new Vue();
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('todo-component', require('./components/Todo-Component.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router 
}).$mount('#app')

