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

mix.js('resources/js/app.js', 'public/assets/js')
    .postCss('resources/css/index.css', 'public/assets/css')
    .postCss('resources/css/app.css', 'public/assets/css', [
        //
    ]);

mix.js('resources/blog/js/blog.js', 'public/assets/js')
    .js('resources/blog/js/most-popular.js', 'public/assets/js')
    .js('resources/blog/js/datepicker.js', 'public/assets/js')
    .sass('resources/sass/datepicker/main.scss', 'public/css')
    .postCss('resources/blog/css/blog.css', 'public/assets/css');
