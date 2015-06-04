<!doctype html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>

    <title>Mastah Code</title>

    {{--Meta--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    {{--favicon--}}
    <link rel="shortcut icon" href="{{asset('icon/icon.ico')}}">

    {{--Web Font--}}
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    @include('Page.partials.css')

</head>

<body>

<div class="wrapper page-option-v1">

    @include('Page.Headers')

    @yield('header')








    @include('Page.partials.Footer')




</div>



@yield('kontent')

@include('Page.partials.js')



</body>
</html>