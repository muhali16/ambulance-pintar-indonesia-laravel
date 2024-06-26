const mix = require('laravel-mix');

mix.setPublicPath('public');
mix.setResourceRoot('../');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/aos.js', 'public/js')
    .js('resources/js/jquery.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
