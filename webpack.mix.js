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

// Bootstrap
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

// App
mix.sass('resources/sass/xs.sass', 'public/css')
    .sass('resources/sass/sm.sass', 'public/css')
    .sass('resources/sass/md.sass', 'public/css')
    .sass('resources/sass/lg.sass', 'public/css')
    .sass('resources/sass/xl.sass', 'public/css');

mix.version(['public/images']);
