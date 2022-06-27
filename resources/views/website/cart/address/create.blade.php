@extends('website.layout')
@section('content')
    <!--start Breadcrumb-->

    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.Address')</h3>
            <nav aria-label="CART">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"
                            class="text-dark main_bold  text-decoration-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.addAddress')</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--start cart_payment-->

    <div class="cart_payment">
        <div class="container">
            <div class="row my-4">
                <div class="">
                    <div class="m-2">
                        <form id="addressForm" action="{{ route('address.store') }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <span class="main_bold p-2">@lang('website.phone')</span>
                                        <input required type="text" readonly class="border rounded p-3 w-100" name="phone"
                                            value="{{ auth('client')->user()->phone }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2">
                                        <span class="main_bold p-2">@lang('website.name')</span>
                                        <input required type="text" class="border rounded p-3 w-100" name="name"
                                            value="{{ auth('client')->user()->first_name }} {{ auth('client')->user()->last_name }}">
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <span class="main_bold p-2">@lang('website.region')</span>
                                            <input required  name="region" type="text" class="border rounded p-3 w-100">
                                        </div>
                                    </div>

                                <div class="col-md-6">
                                    <div class="my-2">
                                        <span class="main_bold p-2">@lang('website.block')</span>
                                        <input required type="text" class="border rounded p-3 w-100" name="block">
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-12 col-md-6 px-0">
                                    <div class="m-1">
                                        <span class="main_bold p-2">@lang('website.road')</span>
                                        <input required type="text" class="border rounded p-3 w-100" name="road">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 px-0">
                                    <div class="m-1">
                                        <span class="main_bold p-2">@lang('website.floorNo')</span>
                                        <input required type="text" class="border rounded p-3 w-100" name="floor_no">
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 col-md-6 px-0">
                                    <div class="m-1">
                                        <span class="main_bold p-2">@lang('website.apartmentNo')</span>
                                        <input type="text" class="border rounded p-3 w-100" name="apartment">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" form="addressForm" class="main_button main_border p-3 w-100 mx-2 rounded transition-me main_bold">@lang('website.addAddress')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
