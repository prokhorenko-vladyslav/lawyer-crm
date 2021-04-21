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

mix.browserSync('laurel.lawyer.loc')
    .js('resources/js/client/app.js', 'public/js/client')
    .sass('resources/scss/client/app.scss', 'public/css/client')
    .copyDirectory('resources/img', 'public/img');
