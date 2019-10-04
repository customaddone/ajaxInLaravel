let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js/app.js')
   .scripts('resources/assets/js/samplevue.js', 'public/js/samplevue.js')
   .scripts('resources/assets/js/examplevue.js', 'public/js/examplevue.js')
   .scripts('resources/assets/js/codemirror.js', 'public/js/codemirror.js')
   .scripts('resources/assets/js/javascript.js', 'public/js/javascript.js')
   .sass('resources/assets/sass/app.scss', 'public/css');
