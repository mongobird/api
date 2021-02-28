/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import 'v-tooltip/dist/v-tooltip.css'
import VTooltip from 'v-tooltip'
Vue.use(VTooltip)

import './assets/vendor/bootstrap/css/bootstrap.min.css'
import './assets/vendor/font-awesome/css/font-awesome.min.css';
import './assets/scss/main.scss';
import './assets/scss/color_skins.scss';




import Meta from "vue-meta";
Vue.use(Meta);


import User from './Helpers/User'
window.User = User
//User.logout()

import VModal from 'vue-js-modal';
Vue.use(VModal);

import { Form, HasError, AlertError } from 'vform';
window.Form =Form;

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


  import swal from 'sweetalert2';
  window.swal = swal;
  
  const toast = swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', swal.stopTimer)
      toast.addEventListener('mouseleave', swal.resumeTimer)
    }
  });
  
  window.toast = toast;

  let Fire = new Vue();
  window.Fire =Fire;








Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('bo-component', require('./components/BoComponent.vue').default);


// Элементы входа

Vue.component('login', require('./components/auth/Login.vue').default);
Vue.component('register', require('./components/auth/Register.vue').default);
Vue.component('forgot-password', require('./components/auth/Forgot-password.vue').default);


// Элементы панели
Vue.component('toolbar', require('./components/panel/Toolbar.vue').default);
Vue.component('profile', require('./components/panel/Profile.vue').default);
Vue.component('testbody', require('./components/panel/Testbody.vue').default);

Vue.component('mainpanel', require('./components/panel/MainPanel.vue').default);

// Тестовые панели

Vue.component('inbox', require('./components/Test/Inbox.vue').default);



///////////////////////////////////////////////////////

import router from "./components/Router/router.js"


const app = new Vue({
    el: '#app',
    router: router
  
});