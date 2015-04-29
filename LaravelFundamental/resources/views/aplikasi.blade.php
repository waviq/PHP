<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="/css/all.css">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="/js/select2.js"></script>


</head>
<body>

<div class="container">

    @include('flash::message')

    {{--@if(Session::has('pesan'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('pesan')}}
        </div>
    @endif--}}


    @yield('konten')
</div>

<!-- Script ini khusus untuk Flash::overlay('...') -->
<script>
    $('#flash-overlay-modal').modal();
</script>






</body>
</html>