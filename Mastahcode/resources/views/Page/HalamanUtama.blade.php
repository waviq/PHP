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

    @include('Page.partials.css')

</head>

<body>

<div class="wrapper page-option-v1">

@include('Page.Headers')




</div>




@include('Page.partials.js')
@yield('kontent')

</body>
</html>