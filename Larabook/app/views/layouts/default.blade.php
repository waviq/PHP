<!doctype html>
<html lang="en">
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Document</title>
            <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/main.css')}}">
            
        </head>
        <body>
            
            @include('layouts.partials.nav')
            
            <div class="container">
                @yield('content')
            </div>
            
            <script src="{{asset('assets/jquery/jquery.js')}}"></script>
            <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        </body>
    </html>