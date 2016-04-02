// jQuery and Vue
window.jQuery = require('jquery');
var Vue = require('vue');

// Require bootstrap, sweetalert and bootstrap select plugin
require('../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js');
require('../../../node_modules/sweetalert/dist/sweetalert.min.js');
require('bootstrap-select');

// Vue resource, used for ajax requests
Vue.use(require('vue-resource'));

// Enable debug mode
Vue.config.debug = true;

import Login from './components/Login.vue';
import SubmitResource from './components/SubmitResource.vue';
import Resources from './components/Resources.vue';
import AdminCenter from './components/AdminCenter.vue';

new Vue({
    el: '#app',
    components: {
        'login': Login,
        'submit-resource': SubmitResource,
        'resources': Resources,
        'admin-center': AdminCenter,
    }
});