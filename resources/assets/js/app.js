window.jQuery = require('jquery');
require('../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js');
require('bootstrap-select');

jQuery(document).ready(function() {
    jQuery('select').selectpicker();
});