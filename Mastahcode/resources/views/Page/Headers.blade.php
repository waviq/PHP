{{--Header--}}
<div class="header">
    <div class="container">

        {{--Logo--}}
        <a class="logo" href="#">
            <img src="assets/img/logo1-default.png" alt="Logo">
        </a>
        {{--End Logo--}}

        {{--TopBar--}}
        <div class="topbar">
            <ul class="loginbar pull-right">
                <li class="hoverSelector">
                    <i class="fa fa-globe"></i>
                    <a>Languages</a>
                    <ul class="languages hoverSelectorBlock">
                        <li class="active">
                            <a href="#">English <i class="fa fa-check"></i></a>
                        </li>
                        <li><a href="#">Indonesia</a></li>
                        <li><a href="#">German</a></li>
                    </ul>
                </li>

                <li class="topbar-devider"></li>
                <li><a href="#">Help</a></li>
                <li class="topbar-devider"></li>
                <li><a href="{{url('/auth/masuk')}}">Login</a></li>
            </ul>
        </div>
        {{--End Topbar--}}

        {{--button auto keluar Agar tampilan di mobile lebih rapi n bagus--}}
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
        {{--End toggle button--}}
    </div>
    {{--End Container--}}

    {{--Kumpulan Nav Link, forms, slicing, dll--}}
    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav">
                {{--Home--}}
                <li class="dropdown active">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        Home
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1</a></li>

                        {{--sub Menu--}}
                        <li class="dropdown-submenu">
                            <a href="javascript:void(0);">Page 2</a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="#">Sub Menu 1</a></li>
                                <li><a target="_blank" href="#">Sub Menu 2</a></li>
                            </ul>
                        </li>
                        {{--end subMenu--}}
                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Blog
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
{{--End Header--}}