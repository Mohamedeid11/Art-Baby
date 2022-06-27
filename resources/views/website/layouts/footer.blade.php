<!--start footer-->

<style>
    a,
    a:hover {
        color: #e24b30;

    }

</style>
<footer class="second_bg py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="my-2">
                    <a href="{{ route('home') }}">

                        <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}"
                            class="img-fluid" alt="image">
                    </a>
                    {{-- <p class="mt-4 text-white">@lang('website.about')</p> --}}

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row align-items-right justify-content-right">
                    <div class="col-12 col-md-6">
                        <div class="my-2">
                            <ul class="list-unstyled">
                                <li class="my-3 py-3"><a class="text-decoration-none main_link transition-me h5"
                                        href="{{ route('home') }}">@lang('website.home')</a></li>
                                <li class="my-3 py-3"><a class="text-decoration-none main_link transition-me h5"
                                        href="{{ route('categories') }}">@lang('website.categories')</a></li>
                                @if (Auth::guard('client')->check())
                                    <li class="my-3 py-3"><a
                                            class="text-decoration-none main_link transition-me h5"
                                            href="{{ route('auth.profile') }}">@lang('website.myProfile')</a></li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="my-2">
                            <ul class="list-unstyled">
                                <li class="my-3 py-3"><a class="text-decoration-none main_link transition-me h5"
                                        href="{{ route('cart.index') }}">@lang('website.cart')</a></li>
                                <li class="my-3 py-3"><a class="text-decoration-none main_link transition-me h5"
                                        href="{{ route('termsConditions') }}">@lang('website.about')</a></li>

                                <li class="my-3 py-3"><a class="text-decoration-none main_link transition-me h5"
                                        href="{{ route('termsConditions') }}">@lang('website.terms')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h3 class="my_bold text-white">@lang('website.followUs')</h3>
            <div class="d-flex justify-content-center">
                <ul class="list-unstyled d-flex my-0">
                    <li class="mx-2">
                        <a href="{{ $settings['snapchat'] }}">
                            <i class="icon-snapchat h4 icon_upper transition-me point"></i>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="{{  $settings['twitter']  }}">
                            <i class="icon-twitter h4 icon_upper transition-me point"></i>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="{{ $settings['instagram']  }}">
                            <i class="icon-instagram h4 icon_upper transition-me point"></i>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="{{ $settings['facebook']  }}">
                            <i class=" icon-facebook-with-circle h4 icon_upper transition-me point"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="bg-white" style="opacity: 1">
    <div class="my-2 text-center">
        <p class="text-white">@lang('website.copyright_footer')
            <a href="https://www.instagram.com/emcansolutions/" target="blank" class="text-decoration-none">
                <span style="color:white">@lang('website.emcanTechInfo')

                </span>
            </a>
        </p>
    </div>
</footer>



<a href="https://api.whatsapp.com/send/?phone=+973{{  $settings['whatsapp'] }}&text&app_absent=0" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<span>
    <a href="#" id="scroll" style="display: none;"><span></span></a>
</span>
