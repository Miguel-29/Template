const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.css('resources/template/css/bootstrap.min.css', 'public/css')
    .css('resources/template/css/dashboard.css','public/css')
    .js('resources/template/js/bootstrap.js','public/js')
    .js('resources/template/js/dashboard.js','public/js')
    .js('resources/template/js/feather.js','public/js')
    .js('resources/template/js/Chart.min.js','public/js')

