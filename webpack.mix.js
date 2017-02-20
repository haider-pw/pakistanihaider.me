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
    ], 'public/assets/css/all.css')
   .sass('resources/assets/sass/style.scss', 'public/assets/css');

//copy javascript files to public
mix.copy('resources/assets/js/', 'public/assets/js/');

//copy img directory files to public img directory - this might be temporarily needed.
mix.copy('resources/assets/img/', 'public/assets/img/');


//Admin Section Imports
mix.copy('resources/assets/admin/css/', 'public/assets/admin/css/');
mix.copy('resources/assets/admin/img/', 'public/assets/admin/img/');
mix.copy('resources/assets/admin/js/', 'public/assets/admin/js/');
mix.copy('resources/assets/admin/plugins/', 'public/assets/admin/plugins/',false);
//copy bootstrap files
mix.copy('resources/assets/admin/bootstrap', 'public/assets/admin/bootstrap',false);
