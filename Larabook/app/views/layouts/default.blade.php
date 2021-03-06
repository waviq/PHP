<!doctype html>
<html lang="en">
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Larabook</title>
            <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/main.css')}}">

        </head>
        <body>

            @include('layouts.partials.nav')

            <div class="container">
                @include('flash::message')

                @yield('content')
            </div>

            <script src="{{asset('assets/jquery/jquery.js')}}"></script>
            <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

            <script>
               

                $('.comments__create-form').on('keydown', function (e) {
                    if (e.keyCode === 13) {
                        e.preventDefault();
                        $(this).submit();
                    }
                });
            </script>
            <!--            Jika mau mau overlay gunakan scrip d bwah ini-->
            <!--        <script>$('#flash-overlay-modal').modal();</script>-->
        </body>
    </html>