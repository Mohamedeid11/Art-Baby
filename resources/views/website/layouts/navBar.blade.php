<div class="upper main_bg py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="text-white d-flex justify-content-md-start justify-content-center align-items-center">
                            <i class="icon-phone1 h5 me-2" style="margin-left:5%; margin-right:5%"></i>
                            <a style="color: #ffffff; text-decoration: none;" href="tel:{{ $settings['phone']}}"><span class="h5">{{  $settings['phone']}}</span></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-white d-flex justify-content-md-start justify-content-center align-items-center">
                            <i class="icon-envelope4 h5 me-2" style="margin-left:5%; margin-right:5%"></i>
                            <a style="color: #ffffff; text-decoration: none;" href="mailto:{{ $settings['email']}}"><span class="">{{ $settings['email']}}</span></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-md-end justify-content-center">
                    <ul class="list-unstyled d-flex my-0">
                        <li class="mx-2">
                            <a style="color: #8fc7c0;" href="{{ $settings['snapchat'] }}">
                                <i class="icon-snapchat h4 icon_upper transition-me point"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a style="color: #8fc7c0;" href="{{  $settings['twitter']  }}">
                                <i class="icon-twitter h4 icon_upper transition-me point"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a style="color: #8fc7c0;" href="{{ $settings['instagram'] }}">
                                <i class="icon-instagram h4 icon_upper transition-me point"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a style="color: #8fc7c0;" href="{{ $settings['facebook'] }}">
                                <i class="icon-facebook-with-circle h4 icon_upper transition-me point"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar shadow py-3">
    <div class="container">
        <div class="row w-100 align-items-center">
            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center justify-content-md-start align-items-center">
                    <div class="dropdown lamers">
                        <button sty class="btn btn-secondary dropdown-toggle back_me border-0 second_color my_bold" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ session()->get('currency') }}

                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @foreach (currencies() as $currency)
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item" href="{{ route('currency', $currency) }}">{{ $currency }}</a>
                            @endforeach
                        </ul>
                    </div>
                    <div class="my_hight_border mx-5"></div>
                    <div class="dropdown lamers">

                        @if (App::isLocale('en'))
                        <a href="{{ route('lang', 'ar') }}" class="btn btn-secondary back_me border-0 second_color my_bold" aria-expanded="false">
                            Arabic <img src="{{ asset('website/assets_en/img/bahrain.png') }}" class="img-fluid ms-2" alt="image">
                        </a>
                        @else
                        <a href="{{ route('lang', 'en') }}" class="btn btn-secondary back_me border-0 second_color my_bold" aria-expanded="false">
                            English<img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_cb226785-c160-469c-937f-a390cc7096d8 (25).png') }}" class="img-fluid ms-2" alt="image">
                        </a>
                        @endif

                    </div>
                </div>
            </div>


            <div class="col-12 col-md-4">

                <div class="d-flex justify-content-center">
                    <div class=" my-2">
                        <a href="{{ route('home') }}" class="text-decoration-none w-100 d-flex justify-content-md-start justify-content-center"><img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}" class="img-fluid w-75" alt="logo"></a>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center align-items-center">

                    <div class="pe-4">
                        <i class="icon-search h4 point pop_search second_color"></i>

                        <div class="popup" id="show_search">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="insert text-center bg-white d-flex justify-content-center align-items-center p-2">
                                    <form action="{{ route('search') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="w-100 h-100 pt-4 px-3">
                                            <h4 class="text-center main_color my_bold">@lang('website.search')</h4>
                                            <input autocomplete="off"  type="search" class="border w-100 rounded p-2 my-3" name="search">
                                            <div class="d-flex justify-content-center my-3">
                                                <button sty class="main_button border-0 py-2 px-5 rounded transition-me main_bold">
                                                    @lang('website.search')
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="my_hover pe-4 position-relative">
                        <div class="point second_color">

                            <a href="{{ route('cart.index') }}" style="color:#e24b30" class="text-decoration-none">
                                <span class="text-dark"> {{ getCartCount() }}</span>
                                <i class="icon-bag2 h4"></i>



                            </a>
                        </div>
                    </div>


                    <div class="dropdown ps-2">
                        <button sty class="btn btn-secondary dropdown-toggle back_me border-0 second_color my_bold" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="icon-view-list h4 point"></i>
                        </button>
                        <ul style="cursor: pointer;" class="dropdown-menu" aria-labelledby="dropdownMenuButton1" @if (app()->isLocale('ar')) dir="rtl" @endif>
                            @if (Auth::guard('client')->check())
                            <p class="font-weight-bold text-center">@lang('website.welcome') {{ getUsername() }}</p>
                            @endif
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('home') }}"><i class="icon-home {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.home')</span></a>
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('categories') }}"><i class="icon-view-tile {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.categories')</span></a>
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('cart.index') }}"><i class="icon-bag2 {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.cart')</span></a>
                            @if (Auth::guard('client')->check())
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('auth.profile') }}"><i class="icon-list6 {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.profile')</span></a>
                            @else
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('login') }}"><i class="icon-user2 {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.login')</span></a>
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('auth.register') }}"><i class="icon-user2 {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.signUp')</span></a>
                            @endif

                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('about') }}"><i class="icon-news-paper {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.aboutus')</span></a>
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('contact') }}"><i class="icon-news-paper {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.contact')</span></a>
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('faq') }}"><i class="icon-question-circle-o {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.faq')</span></a>
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('returnRefundPolicy') }}"><i class="icon-news-paper {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.returnsRefundPolicy')</span></a>
                            <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2" href="{{ route('termsConditions') }}"><i class="icon-news-paper {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.terms')</span></a>

                            @if (Auth::guard('client')->check())
                            <form action="{{ route('auth.logout') }}" method="post" enctype="multipart/form-data" class="alert-danger">
                                @csrf
                                <button type="submit" style="background: none;width: 100% !important;border: none;">
                                    <a style="@if (app()->isLocale('ar')) text-align: right; @endif" class="dropdown-item p-2"><i class="  {{ app()->isLocale('ar') ?  'ms-2' :  'me-2' }} second_color"></i><span class="font-weight-bold">@lang('website.logout')</span></a>
                                </button>
                            </form>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>






