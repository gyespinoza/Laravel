require('./bootstrap');
//window.Vue = require('vue').default;
import Vue from 'vue';

Vue.component('encabezado', require('./components/Header.vue').default);



const app = new Vue({
    el: '#app'
});