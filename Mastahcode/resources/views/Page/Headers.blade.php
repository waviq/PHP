{{--Header--}}
<div class="header">
    <div class="container">

        {{--Logo--}}
        <a class="logo" href="#">
            <img src="{{asset('assets/img/LogoOkeKecil.png')}}" alt="Logo">
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
                        <li><a href="#">Jawa Tegal</a></li>
                    </ul>
                </li>

                <li class="topbar-devider"></li>
                <li><a href="#">Help</a></li>


                @if(Auth::guest())
                    <li class="topbar-devider"></li>
                    <li><a href="{{url('/auth/masuk')}}">Login</a></li>
                @else

                    <li class="topbar-devider"></li>
                    <li class="hoverSelector">


                        <a>{{ Auth::user()->name }}</a>
                        <ul class="languages hoverSelectorBlock">
                            <li><a href="{{url('/auth/logout')}}">Logout</a></li>
                            <li><a href="#">Profile</a></li>
                        </ul>
                    </li>



                @endif
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
                    <a href="{{url('/')}}">
                        Home
                    </a>

                </li>

                <li class="dropdown active">
                    <a href="{{url('/blog')}}">
                        Blog
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>
{{--End Header--}}