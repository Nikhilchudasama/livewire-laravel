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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .js('resources/js/backend/app.js', 'public/js/backend.js')
    .extract([
        'alpinejs',
        'popper.js',
        'axios',
        'lodash',
    ])
    .postCss('resources/css/backend/app.css', 'public/css/backend.css',[
        require("tailwindcss"),
    ]);
