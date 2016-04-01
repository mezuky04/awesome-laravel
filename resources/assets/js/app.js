window.jQuery = require('jquery');
require('../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js');
require('../../../node_modules/sweetalert/dist/sweetalert.min.js');
require('bootstrap-select');

jQuery(document).ready(function() {
    jQuery('select').selectpicker();
});

var Vue = require('vue');
Vue.use(require('vue-resource'));

// Enable debug mode
Vue.config.debug = true;

import Login from './components/Login.vue';
import SubmitResource from './components/SubmitResource.vue';

new Vue({
    el: '#app',
    components: {
        Login, SubmitResource
    }
});