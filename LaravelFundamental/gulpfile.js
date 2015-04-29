var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(campur) {
    campur.sass('app.scss','resources/css');

    /*
    a. Campur file banyaak CSS
    b. file output secara default bernama all.css
    c. secara default jg tersimpan di: public/css/all.css
    */
    campur.styles([
        'app.css',
        'liblary/bootstrap.min.css',
        'liblary/select2.min.css'
    ]);

    /*
    a. Campur banyak file JS,
    b. File output akan custom bernama output.js,
    c. tersimpan secara custom di: public/js.output.js
    * */
    campur.scripts([
        //'liblary/bootstrap.min.js',
        //'liblary/JQuery.js',
        'liblary/select2.min.js'
    ],'public/js/select2.js');




});



