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
/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
*/
mix 
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/bootstrap.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/bootstrap.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js.map','public/bootstrap.bundle.js.map')
    ;