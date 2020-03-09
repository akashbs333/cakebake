var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
    .styles([
        '../plugins/jvectormap/jquery-jvectormap-2.0.2.css',
        '../plugins/datatables/dataTables.bootstrap4.min.css',
        '../plugins/datatables/buttons.bootstrap4.min.css',
        '../plugins/datatables/responsive.bootstrap4.min.css',
        '../plugins/fullcalendar/vanillaCalendar.css',
        '../plugins/morris/morris.css',
        'bootstrap.min.css',
        'icons.css',
        'style.css'
    ], './public/css/libs.css')

        .scripts([
            'popper.min.js',
            'bootstrap.min.js',
            'modernizr.min.js',
            'detect.js',
            'fastclick.js',
            'jquery.blockUI.js',
            'waves.js',
            'jquery.nicescroll.js',
            '../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
            '../plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
            '../plugins/skycons/skycons.min.js',
            '../plugins/fullcalendar/vanillaCalendar.js',
            '../plugins/raphael/raphael-min.js',
            '../plugins/morris/morris.min.js',
            '../pages/dashborad.js',
            '../plugins/datatables/jquery.dataTables.min.js',
            '../plugins/datatables/dataTables.bootstrap4.min.js',
            '../plugins/datatables/dataTables.buttons.min.js',
            '../plugins/datatables/buttons.bootstrap4.min.js',
            '../plugins/datatables/jszip.min.js',
            '../plugins/datatables/pdfmake.min.js',
            '../plugins/datatables/vfs_fonts.js',
            '../plugins/datatables/buttons.html5.min.js',
            '../plugins/datatables/buttons.print.min.js',
            '../plugins/datatables/buttons.colVis.min.js',
            '../plugins/datatables/dataTables.responsive.min.js',
            '../plugins/datatables/responsive.bootstrap4.min.js'
        ], './public/js/libs.js')
});
