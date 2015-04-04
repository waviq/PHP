<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Perpustakaan</title>
        <link rel="stylesheet" href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
        <script src="{{ asset('components/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('packages/uikit/js/uikit.min.js')}}"></script>
        @yield('asset')
    </head>
    <body>
        <div class="uk-container uk-container-center uk-margin-top">
            <nav class="uk-navbar">
                <a href="#" class="uk-navbar-brand uk-hidden-small">LaraPus</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    @yield('nav')
                </ul>

                <div class="uk-navbar-flip uk-navbar-content">

                    {{--<a> {{Sentry::getUser()->first_name}}</a>--}}
                    <a href="{{URL::to('logout')}}">Logout</a>

                </div>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">LaraPus</div>
            </nav>
            <div class="uk-container-center uk-margin-top">

                @include('layouts.partials.alert')
                <ul class="uk-breadcrumb">
                    @yield('breadcrumb')
                </ul>
                <h1 class="uk-heading-large">
                    @yield('title')
                    @yield('title-button')
                </h1>
                
                @yield('content')
            </div>
        </div>
        @yield('pagejs')
    </body>
</html>