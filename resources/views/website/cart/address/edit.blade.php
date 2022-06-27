@extends('website.layout')
@section('content')
    <!--start Breadcrumb-->

    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.Address')</h3>
            <nav aria-label="CART">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark main_bold  text-decoration-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.addressDetails')</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--start cart_payment-->

    <div class="cart_payment">
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6">
                    <div class="m-2">
                        <form id="addressForm" action="{{ route('address.update', $address['id']) }}"
                            enctype="multipart/form-data" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <span class="main_bold p-2">@lang('website.phone')</span>
                                        <input type="text" readonly class="border rounded p-3 w-100" name="phone"
                                            value="{{ auth('client')->user()->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <span class="main_bold p-2">@lang('website.name')</span>
                                        <input type="text" class="border rounded p-3 w-100" name="name"
                                            value="{{ auth('client')->user()->first_name }} {{ auth('client')->user()->last_name }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <span class="main_bold p-2">@lang('website.region')</span>
                                        <input value="{{ $address['region_id'] }}" type="text"
                                            class="border rounded p-3 w-100" name="region">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="my-2">
                                        <span class="main_bold p-2">@lang('website.block')</span>
                                        <input value="{{ $address['block'] }}" type="text"
                                            class="border rounded p-3 w-100" name="block">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-12 col-md-6 px-0">
                                    <div class="m-1">
                                        <span class="main_bold p-2">@lang('website.road')</span>
                                        <input value="{{ $address['road'] }}" type="text"
                                            class="border rounded p-3 w-100" name="road">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 px-0">
                                    <div class="m-1">
                                        <span class="main_bold p-2">@lang('website.floorNo')</span>
                                        <input value="{{ $address['floor_no'] }}" type="text"
                                            class="border rounded p-3 w-100" name="floor_no">
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 col-md-6 px-0">
                                    <div class="m-1">
                                        <span class="main_bold p-2">@lang('website.apartmentNo')</span>
                                        <input value="{{ $address['apartment'] }}" type="text"
                                            class="border rounded p-3 w-100" name="apartment">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between align-items-center">
                                <button
                                    class="main_button main_border p-3 w-100 mx-2 rounded transition-me main_bold">@lang('website.edit')</button>
                                <button
                                    class="second_button main_border py-3 w-100 mx-2 rounded transition-me main_bold">@lang('website.cancel')</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mx-2 my-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7286615.899145397!2d30.8768375!3d26.906099949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1612725162337!5m2!1sar!2seg"
                            class="w-100" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
