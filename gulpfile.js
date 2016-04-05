var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.sass('emails/resource-notification.scss', 'public/css/resource-notification.css');
    mix.copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
    mix.browserify('app.js');
    mix.phpUnit();
});
