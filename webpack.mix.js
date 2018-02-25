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

mix.js('resources/assets/js/app.js', 'public/js')
        .mix.scripts([
            'resources/assets/js/libs/typewriter.js',
            'node_modules/smooth-scroll/dist/js/smooth-scroll.min.js'], 'public/js/all.js')
        .sass('resources/assets/sass/app.scss', 'public/css');
