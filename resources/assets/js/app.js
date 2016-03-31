window.jQuery = require('jquery');
require('../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js');
require('bootstrap-select');

jQuery(document).ready(function() {
    jQuery('select').selectpicker();
});

var Vue = require('vue');
Vue.use(require('vue-resource'));


import Login from './components/Login.vue';

new Vue({
    el: '#app',
    components: {
        Login
    }
});