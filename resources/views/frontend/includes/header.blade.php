<div id="arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i>
</div>

<header id="home">
    <div class="container">
        <div class="top-bar">
            <div class="nav-col">
                <div class="logo">
                    {{-- <h1><span class="isbmc">OBS</span></h1> --}}
                    <img src="{{ asset('img/logo.png') }}" class="img-responsive" alt="logo">
                </div>
                <!--logo-->
                <div class="menu">
                    <a class="active" href="#home">Home</a>
                    <a href="/posts">Brand Products</a>
                    <a href="#blog">Services</a>
                </div>
                <div class="clear"></div>
                <!--clear-->
            </div>
            <!--nav-col-->
            <div class="cnt-info-col">
                @can('view_backend')
                    <a href="{{ route('backend.dashboard') }}"> Dashboard</a>
                @endcan
                @auth
                    <a href="{{ route('frontend.users.profile', auth()->user()->id) }}">{{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
                        Log Out
                    </a>
                    <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else

                    <a href="{{ route('login') }}"> Login
                    </a>

                    @if (user_registration())
                        <a href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
            <div class="clear"></div>
            <!--clear-->
        </div>
        <!--top-bar-->
    </div>
</header>

<section id="mobile-menu">
    <div class="container-mobile">
        <div class="mobile-logo">
            <h1><span class="moss">Online&nbsp;Branding&nbsp;System</span></h1>
            {{-- <img src="{{ asset('img/logo.png') }}" class="img-responsive" alt="logo" /> --}}

            <div class="clear"></div>
            <!--clear-->
        </div>
        <!--nav-col-->
        <div class="cnt-info-col">
            <button type="button" id="toggle-bar" value="hide/show"><i class="fa fa-bars"></i></button>
        </div>
        <div class="clear"></div>
        <!--clear-->
    </div>
</section>

<div class="menu" id="mob-menu">
    <a class="active" href="#home">Home</a>
    <a href="/posts">Brand Products</a>
    <a href="#blog">Services</a>
    @can('view_backend')
        <a href="{{ route('backend.dashboard') }}"> Dashboard</a>
    @endcan
    @auth
        <a href="{{ route('frontend.users.profile', auth()->user()->id) }}">{{ Auth::user()->name }}</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
            Log Out
        </a>
    @else

        <a href="{{ route('login') }}"
            class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4"> Login
        </a>

        @if (user_registration())
            <a href="{{ route('register') }}">
                Register
            </a>
        @endif
    @endauth
</div>
