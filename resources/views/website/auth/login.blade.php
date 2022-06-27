@extends('website.layout')
@section('content')
{{-- login modal --}}

<div class="d-flex justify-content-center align-items-center h-100">
    <div class="insert_2 text-center bg-white d-flex justify-content-center align-items-center p-4">
        <div class="text-center w-100 h-100">
            <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}" class="img-fluid" alt="image">
            <h5>@lang('website.login')</h5>
            <form action="{{ route('auth.login') }}" method="post" enctype="multipart/form-data" id="loginForm">
                @csrf
                <div class="my-4">
                    <div class="position-relative">
                        <input autocomplete="off"  type="text" class="w-100 shadow my-2 px-5 py-3 border-0" placeholder="@lang('website.phone')" name="phone">
                        <i class="icon-mobile main_color h1 position-absolute"></i>
                    </div>
                    <div class="position-relative">
                        <input autocomplete="off"  type="password" minlength="6" class="w-100 shadow my-2 px-5 py-3 border-0" placeholder="@lang('website.password')" name="password">
                        <i class="icon-lock main_color h1 position-absolute"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-center my-3">
                    <button sty type="submit" form="loginForm" class="main_button main_border main_bold py-2 px-5 rounded transition-me main_bold">@lang('website.login')</button>
                </div>
                <a style="text-decoration: none" href="{{ route('resetpassord') }}"><small class="text-center text-danger forgertpass dontHaveAccount" style="cursor: pointer">@lang('website.forgetPassword')</small></a>
                <br>
                <a style="text-decoration: none" href="{{ route('auth.register') }}"><small class="text-center text-danger signup dontHaveAccount" style="cursor: pointer">@lang('website.dontHaveAccount')</small></a>

            </form>

        </div>
    </div>
</div>

@endsection
