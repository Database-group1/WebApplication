const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js') // resources/js/app.js, public/js
    .js('resources/js/japan-map/jquery.japan-map.min.js', 'public/js')
    .js('resources/js/japan-map/jquery.japan-map.js', 'public/js')
    .scripts('resources/js/sample.js', 'public/js/sample.js')
    .sass('resources/sass/app.scss', 'public/css');
