@extends('website.layout')
@section('content')
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="insert_2 text-center bg-white d-flex justify-content-center align-items-center p-4">
            <div class="text-center w-100 h-100">
                <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}"
                    class="img-fluid" alt="image">
                <h5>@lang('website.signUp')</h5>
                <form action="{{ route('auth.reg') }}" method="POST" enctype="multipart/form-data" id="signUP">
                    @csrf
                    <div class="my-4">
                        <input autocomplete="off" type="hidden" name="country" id="country">
                        <div class="position-relative sendoptul">
                            <input autocomplete="off" type="text" inputmode="numeric"
                                onclick="this.setSelectionRange(0, this.value.length)"
                                class="w-100 shadow my-2 px-5 py-3 border-0 no-arrow" required
                                placeholder="@lang('website.phone')" id="number" name="phone">
                        </div>
                        <div class="position-relative">
                            <input autocomplete="off" type="text" class="w-100 shadow my-2 px-5 py-3 border-0"
                                placeholder="@lang('website.firstName')" name="first_name" required>
                            <i class="icon-user main_color h1 position-absolute"></i>
                        </div>
                        <div class="position-relative">
                            <input autocomplete="off" type="text" class="w-100 shadow my-2 px-5 py-3 border-0"
                                placeholder="@lang('website.lastName')" name="last_name" required>
                            <i class="icon-user main_color h1 position-absolute"></i>
                        </div>
                        <div class="position-relative">
                            <input autocomplete="off" type="email" class="w-100 shadow my-2 px-5 py-3 border-0"
                                placeholder="@lang('website.email')" name="email" required>
                            <i class="icon-user main_color h1 position-absolute"></i>
                        </div>
                         <div class="position-relative">
                            <select id="country_id" name="country_id" required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                @foreach($Countries as $Country)
                                    <option value="{{ $Country['id'] }}">{{ $Country['name_' . app()->getLocale()] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="position-relative">
                            <input autocomplete="off" type="password" minlength="6"
                                class="w-100 shadow my-2 px-5 py-3 border-0" placeholder="@lang('website.password')"
                                name="password" required>
                            <i class="icon-lock main_color h1 position-absolute"></i>
                        </div>
                        <div id="recaptcha-container"></div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button type="submit"   class="btn  main_button main_border main_bold py-2 px-5 rounded transition-me main_bold">@lang('website.submit')</button >
                    </div>
                    <a style="text-decoration: none" href="{{ route('login') }}">
                        <small class="text-center text-danger login haveAccount" style="cursor: pointer">@lang('website.haveAccount')</small>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection

