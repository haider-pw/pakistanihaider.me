const { mix } = require('laravel-mix');

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


mix.combine([
        'resources/assets/css/material.min.css',
        'resources/assets/css/material-icons.css',
        'resources/assets/css/material-design-iconic-font.min.css',
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/jquery-ui.min.css',
        'resources/assets/css/owl.carousel.css',
        'resources/assets/css/lightgallery.css',
        'resources/assets/css/default-skin/default-skin.css'
    ], 'public/css/all.css')
   .sass('resources/assets/sass/style.scss', 'public/css');

//copy javascript files to public
mix.copy('resources/assets/js/', 'public/js/');

//copy img directory files to public img directory - this might be temporarily needed.
mix.copy('resources/assets/img/', 'public/img/');