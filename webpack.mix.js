const mix = require('laravel-mix');


//require('swiper');
//import '~swiper/swiper.min.css';

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

//mix.js('resources/js/app.js', 'public/js').vue();
mix.js('resources/js/app.js', 'public/js').vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/add.scss', 'public/css')
    .postCss('resources/css/swiper.css', 'public/css')
    .sourceMaps()
    .autoload({ jquery: ['$', 'window.jQuery'], });
    // mix.styles([
    //     'public/css/vendor/normalize.css',
    //     'public/css/vendor/videojs.css'
    // ], 'public/css/all.css');
