<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="{{ route('home') }}" class="logo">
                    <span>@lang('ArtBaby')</span>
                </a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">

                    <li class="dropdown navbar-c-items">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown"
                            aria-expanded="true">
                            <!-- <img src="{{ auth()->user()->image }}" alt="user-img" class="img-circle"> </a> -->
                            <img
                                src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}">
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="user_edit.php?id=<?php echo ''; ?>"><i
                                        class="ti-user text-custom m-r-10"></i> @lang('dashboard.profile')</a></li>
                            <li class="divider"></li>
                            <li><a href="logout" onclick="logout(event)"><i
                                        class="ti-power-off text-danger m-r-10"></i>@lang('dashboard.logout')</a></li>
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
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>@lang('dashboard.home')</a>
                    </li>
                    <li id="itemcategories" class="has-submenu">
                        <a href="#"><i class="fa fa-sitemap"></i>@lang('dashboard.categories')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('categories.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('categories.create') }}">@lang('dashboard.addCategory')</a></li>
                        </ul>
                    </li>
                    <li id="itemproducts" class="has-submenu">
                        <a href="#"><i class="fa fa-product-hunt"></i>@lang('dashboard.products')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('products.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('products.create') }}">@lang('dashboard.addProduct')</a></li>
                        </ul>
                    </li>
                    <li id="itemclients" class="has-submenu">
                        <a href="#"><i class="fa fa-users"></i>@lang('dashboard.clients')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('clients.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('clients.create') }}">@lang('dashboard.addClient')</a></li>
                            <li><a href="{{ route('addresses.create') }}">@lang('dashboard.addAddress')</a></li>
                        </ul>
                    </li>
                    <li id="itemorders" class="has-submenu">
                        <a href="#"><i class="fa fa-list"></i>@lang('dashboard.orders')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('orders.new') }}">@lang('dashboard.newOrders')</a></li>
                            <li><a href="{{ route('orders.current') }}">@lang('dashboard.currentOrders')</a></li>
                            <li><a href="{{ route('orders.previous') }}">@lang('dashboard.previousOrders')</a></li>
                            <li><a href="{{ route('orders.declined') }}">@lang('dashboard.declinedOrders')</a></li>
                        </ul>
                    </li>
                    <li id="itemreports" class="has-submenu">
                        <a href="#"><i class="md md-class"></i>@lang('dashboard.reports')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('reports.financial') }}">@lang('dashboard.financialReport')</a>
                            </li>
                            <li><a href="{{ route('reports.client') }}">@lang('dashboard.clientReport')</a></li>
                            <li><a href="{{ route('reports.payment') }}">@lang('dashboard.paymentReport')</a></li>
                        </ul>
                    </li>
                    <li id="itemsliders" class="has-submenu">
                        <a href="#"><i class="fa fa-picture-o"></i>@lang('dashboard.sliders')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('sliders.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('sliders.create') }}">@lang('dashboard.addImage')</a></li>
                        </ul>
                    </li>
                    <li id="itemtestimonials" class="has-submenu">
                        <a href="#"><i class="fa fa-comments-o"></i>@lang('dashboard.testimonials')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('testimonials.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('testimonials.create') }}">@lang('dashboard.addTestimonial')</a>
                            </li>
                        </ul>
                    </li>
                    {{--  <li id="itemregions" class="has-submenu">
                        <a href="#"><i class="fa fa-map-marker"></i>@lang('dashboard.regions')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('regions.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('regions.create') }}">@lang('dashboard.addRegion')</a></li>
                        </ul>
                    </li>  --}}
                    <li id="itempaymentMethods" class="has-submenu">
                        <a href="#"><i class="fa fa-cc-visa"></i>@lang('dashboard.paymentMethods')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('paymentMethods.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('paymentMethods.create') }}">@lang('dashboard.addPayment')</a></li>
                        </ul>
                    </li>
                    <li id="itemcurrencies" class="has-submenu">
                        <a href="#"><i class="fa fa-euro"></i>@lang('dashboard.currencies')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('currencies.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('currencies.create') }}">@lang('dashboard.addCurrency')</a></li>
                        </ul>
                    </li>
                    <li id="itemfaq" class="has-submenu">
                        <a href="#"><i class="fa fa-euro"></i>@lang('dashboard.faq')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('faq.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('faq.create') }}">@lang('dashboard.addFAQ')</a></li>
                        </ul>
                    </li>
                    <li id="itemcountries" class="has-submenu">
                        <a href="#"><i class="fa fa-euro"></i>@lang('dashboard.countries')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('countries.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('countries.create') }}">@lang('dashboard.addCountry')</a></li>
                        </ul>
                    </li>
                    <li id="itemColor" class="has-submenu">
                        <a href="#"><i class="fa fa-eye"></i>@lang('dashboard.colors')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('colors.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('colors.create') }}">@lang('dashboard.addColor')</a></li>
                        </ul>
                    </li>
                    <li id="itemSize" class="has-submenu">
                        <a href="#"><i class="fa fa-magic"></i>@lang('dashboard.sizes')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('sizes.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('sizes.create') }}">@lang('dashboard.addSize')</a></li>
                        </ul>
                    </li>
                    <li id="itemWeight" class="has-submenu">
                        <a href="#"><i class="fa fa-magic"></i>@lang('dashboard.weights')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('weights.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('weights.create') }}">@lang('dashboard.addWeight')</a></li>
                        </ul>
                    </li>
                    <li id="itemCoupon" class="has-submenu">
                        <a href="#"><i class="fa fa-magic"></i>@lang('dashboard.coupons')</a>
                        <ul class="submenu">
                            <li><a href="{{ route('couponecode.index') }}">@lang('dashboard.viewAll')</a></li>
                            <li><a href="{{ route('couponecode.create') }}">@lang('dashboard.addCoupon')</a></li>
                        </ul>
                    </li>
                    <li id="itemother" class="has-submenu">
                        <a href="#"><i class="md md-class"></i>@lang('dashboard.other')</a>
                        <ul class="submenu">
                            <li><a
                                    href="{{ route('settings.index', 'public') }}">@lang('dashboard.publicSettings')</a>
                            </li>
                            <li><a href="{{ route('settings.messages') }}">@lang('dashboard.websiteMessages')</a>
                            </li>
                            <li><a href="{{ route('settings.index', 'about') }}">@lang('dashboard.about')</a></li>
                            <li><a href="{{ route('settings.index', 'contact') }}">@lang('dashboard.contact')</a>
                            </li>
                            <li><a href="{{ route('settings.index', 'return') }}">@lang('dashboard.return')</a></li>
                            <li><a href="{{ route('settings.index', 'terms') }}">@lang('dashboard.terms')</a></li>
                            <li><a href="{{ route('settings.index', 'meta') }}">@lang('dashboard.meta')</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('lang', app()->getLocale() == 'en' ? 'ar' : 'en') }}"><i
                                class="md md-language"></i> <span
                                style="color: black;">@lang('dashboard.lang')</span></a></li>
                    <li class="has-submenu">
                        <a href="logout" onclick="logout(event)"><i
                                class="md md-swap-vert"></i>@lang('dashboard.logout')</a>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
    <form id="logout" method="POST" action="{{ route('dashboard.logout') }}">
        @csrf
    </form>
</header>
<!-- End Navigation Bar-->
