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
    campur.sass('app.scss');

    /*Campur file banyaak CSS*/
    campur.styles([
        'vendor/normal.css',
        'app.css'
    ], 'public/output/final.css', 'public/css');

    campur.coffee('JQuery.coffee');
    /*Campur file js*/
    /*campur.scripts([
        'vendor/jquery.js',
        'main.js',
        'contoh.js'
    ],'public/output/script.js','public/js');*/


});



