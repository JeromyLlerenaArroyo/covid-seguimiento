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

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css')
   .sass('node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/scss/bootstrap.scss', 'public/css');

mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js', 'public/js/jquery.min.js');
mix.js('node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js', 'public/js/jquery.easing.min.js');
mix.js('node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.min.js', 'public/js/sb-admin-2.min.js');
mix.js('node_modules/startbootstrap-sb-admin-2/vendor/chart.js/Chart.min.js', 'public/js/Chart.min.js');
mix.js('node_modules/startbootstrap-sb-admin-2/js/demo/chart-area-demo.js', 'public/js/chart-area-demo.js');
mix.js('node_modules/startbootstrap-sb-admin-2/js/demo/chart-pie-demo.js', 'public/js/chart-pie-demo.js');
mix.js('node_modules/startbootstrap-sb-admin-2/js/demo/chart-bar-demo.js', 'public/js/chart-bar-demo.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js', 'public/js/jquery.dataTables.min.js');
mix.copy('node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js', 'public/js/dataTables.bootstrap4.min.js');

mix.styles([
        'node_modules/startbootstrap-sb-admin-2/css/sb-admin-2.min.css',
        'node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css',
    ], 'public/css/sb-admin-2.min.css')
   .sass('node_modules/startbootstrap-sb-admin-2/scss/sb-admin-2.scss', 'public/css')
   .styles([
        'resources/css/custom.css',
    ], 'public/css/custom.css')
    .styles([
        'node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css',
    ], 'public/css/dataTables.bootstrap4.min.css');

//mix.copyDirectory('resources/img', 'public/img');
