require('moment');
require('./bootstrap');
require('./stacktable.js');
require('./stacktable.css');
require('./dashboard.css');

 window.Vue = require('vue');
import PayPal from 'vue-paypal-checkout';

import Vue from 'vue';
import VueRouter from 'vue-router';
import Buefy from 'buefy';
Vue.use(Buefy);
Vue.use(VueRouter);



Vue.component('eventregistre',require('./components/event/eventregistre.vue').default);
Vue.component('welcomesearch',require('./components/WelcomeSearch.vue').default);
Vue.component('checkout',   require('./components/chekout.vue').default);
Vue.component('modal',      require('./components/modalWelcome.vue').default);
Vue.component('search',     require('./components/search.vue').default);
Vue.component('card',       require('./components/card.vue').default);
Vue.component('my-search',  require('./components/MySearch.vue').default);
Vue.component('add-room',   require('./components/PanelHotel/modal.vue').default);
Vue.component('edit',       require('./components/PanelHotel/edit.vue').default);
Vue.component('event',      require('./components/PanelHotel/event.vue').default);
Vue.component('welcomeevent',require('./components/PanelHotel/welcomeevent.vue').default);
Vue.component('welcomemodalevent',require('./components/PanelHotel/welcomemodalevent.vue').default);
Vue.component('eventmodal', require('./components/PanelHotel/eventmodal.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('dashboard',  require('./components/PanelAdmin/dashboard.vue').default);
Vue.component('hotels',     require('./components/PanelAdmin/hotels.vue').default);
Vue.component('customers',  require('./components/PanelAdmin/customers.vue').default);
Vue.component('dash',       require('./components/PanelHotel/Dash.vue').default);
Vue.component('profil',     require('./components/PanelHotel/profil.vue').default);
Vue.component('customers',  require('./components/PanelHotel/customers.vue').default);
Vue.component('rooms',      require('./components/PanelHotel/rooms.vue').default);
Vue.component('subscription',require('./components/PanelHotel/sub.vue').default);
Vue.component('roomnumber', require('./components/PanelHotel/roomnumber.vue').default);
Vue.component('editnbr',    require('./components/PanelHotel/editNbrRoom.vue').default);

// //
// import Dashboard        from './components/PanelAdmin/dashboard.vue';
// import Hotels           from './components/PanelAdmin/hotels.vue';
// import CustomersHotel   from './components/PanelAdmin/customers.vue';
// import Dash             from './components/PanelHotel/Dash.vue';
// import Customers        from './components/PanelHotel/customers.vue';
// import Rooms            from './components/PanelHotel/rooms.vue';
// import Sub              from './components/PanelHotel/sub.vue';
// import Profil           from './components/PanelHotel/profil.vue';

// const routes = [
//   {
//     path: '/dashboard',
//     component: Dashboard,
//   },
// //   {
// //     path: '/dash',
// //     component: Dash,
// //   },
// //   {
// //     path: '/customers',
// //     component: Customers,
// //   },
// //   {
// //     path: '/rooms',
// //     component: Rooms,
// //   },
// //   {
// //     path: '/subscription',
// //     component: Sub,
// //   },
//   {
//     path: '/hotels',
//     component: Hotels,
//   },
//   {
//     path: '/clients',
//     component: CustomersHotel,
//   },
// //   {
// //     path: '/profil',
// //     component: Profil,
// //   },
// ];
//
//
//
// const router = new VueRouter({ routes })

const app = new Vue({
  el: '#app',
  // router:router,

});
