<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Implementasi Laravel 5</title>

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">

</head>
<body>

    @include('flash::message')
    @include('partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <div class="flash">
        Updated!
    </div>


	<!-- Scripts -->
	<script src="/js/JQuery.js"></script>
    <script src="/js/Bootstrap.js"></script>
    <script src="/js/all.js"></script>

</body>
</html>
