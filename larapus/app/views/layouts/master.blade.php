<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')|Laravel Perpus</title>
        <link rel="stylesheet" href="{{asset('packages/uikit/css/uikit.almost-flat.min.css')}}" />
        <script src="{{asset('components/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('packages/uikit/js/uikit.min.js')}}"></script>
    </head>

    <body>

        <div class="uk-container uk-container-center uk-margin-top">
            <nav class="uk-navbar">
                <a href="#" class="uk-navbar-brand uk-hidden-small">Larapus</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    @yield('nav')
                </ul>
                <div class="uk-navbar-flip uk-navbar-content">
                    <a href="#">Admin</a>
                    <a href="#">Logut</a>
                </div>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">LaraPus</div>
            </nav>
            
            <div class="uk-container-center uk-margin-top">
                <ul class="uk-breadcrumb">
                    @yield('breadcrumb')
                </ul>
                <h1 class="uk-heading-large">@yield('title')</h1>
                @yield('content')
            </div>
            
        </div>
        
    </body>
</html>