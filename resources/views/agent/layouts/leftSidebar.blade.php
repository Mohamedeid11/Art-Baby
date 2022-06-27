
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="{{ route('home') }}" class="logo">
                    <span>@lang('dashboard.bacora')</span>
                </a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">

                    <li class="dropdown navbar-c-items">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="user_edit.php?id=<?php echo ''; ?>"><i class="ti-user text-custom m-r-10"></i> @lang('dashboard.profile')</a></li>
                            <li class="divider"></li>
                            <li><a href="logout" onclick="logout(event)"><i class="ti-power-off text-danger m-r-10"></i>@lang('dashboard.logout')</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="{{ route('agent') }}"><i class="fa fa-home"></i>@lang('dashboard.home')</a>
                    </li>
                    <li id="itemProducts" class="has-submenu">
                        <a href="#"><i class="fa fa-product-hunt"></i>@lang('dashboard.products')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('agent-products.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('agent-products.create') }}">@lang('dashboard.addProduct')</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('lang', app()->getLocale() == 'en' ? 'ar' : 'en') }}"><i class="md md-language"></i> <span style="color: black;">@lang('dashboard.lang')</span></a></li>
                    <li class="has-submenu">
                        <a href="logout" onclick="logout(event)"><i class="md md-swap-vert"></i>@lang('dashboard.logout')</a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
    <form id="logout" method="POST" action="{{ route('agent.logout') }}">
        @csrf
    </form>
</header>
<!-- End Navigation Bar-->

