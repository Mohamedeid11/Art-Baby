@extends('website.layout')
@section('content')


    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.profile')</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h5 main_bold">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"
                            class="text-dark text-decoration-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.myProfile')</li>
                </ol>
            </nav>
        </div>
    </div>




    <!--start profile-->

    <div class="profile">
        <div class="container">
            <div class="p-3">
                <h2 class="main_bold">@lang('website.myProfile')</h2>
            </div>
            <hr class="text-dark border-dark">


            <div class="row my-4">
                <div class="col-12 col-md-3">
                    <div class="nav flex-column nav-pills me-3" aria-orientation="vertical">
                        <button class="nav-link active my-3 h5" data-bs-toggle="pill" type="button"
                            onclick="showHide(1)">@lang('website.accountInfo')</button>
                        <button class="nav-link my-3 h5" data-bs-toggle="pill" type="button"
                            onclick="showHide(2)">@lang('website.myAddresses')</button>
                        <button class="nav-link my-3 h5" data-bs-toggle="pill" type="button"
                            onclick="showHide(3)">@lang('website.myOrder')</button>
                        <button class="nav-link my-3 h5" data-bs-toggle="pill" type="button"
                            onclick="showHide(4)">@lang('website.myFavourite')</button>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="tab-content w-100">

                        <div id="myAccount" style="display: block">
                            <!--start account info-->
                            <div class="row">
                                <!--start my data-->

                                <div class="col-12">

                                    <form action="{{ route('auth.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="form-group  col-sm-8 mx-auto">
                                                    <label for="name">{{ __('website.firstName') }}</label>
                                                    <input value="{{ auth('client')->user()->first_name }}" type="text" name="firstName" id="name" parsley-trigger="change" required  class="form-control">
                                                </div>
                                                <hr style="opacity: 0">

                                                <div class="form-group  col-sm-8 mx-auto">
                                                    <label for="name">{{ __('website.lastName') }}</label>
                                                    <input value="{{ auth('client')->user()->last_name }}" type="text" name="lastName" id="name" parsley-trigger="change" required  class="form-control">
                                                </div>
                                                <hr style="opacity: 0">

                                                <div class="form-group  col-sm-8 mx-auto">
                                                    <label for="name">{{ __('website.email') }}</label>
                                                    <input value="{{ auth('client')->user()->email }}" type="text" name="email" id="name" parsley-trigger="change" required  class="form-control">
                                                </div>
                                                <hr style="opacity: 0">

                                                <div class="form-group  col-sm-8 mx-auto">
                                                    <label for="phone">{{ __('website.phone') }}</label>
                                                    <input readonly value="{{ auth('client')->user()->phone }}" type="text" name="phone" id="phone" parsley-trigger="change" required  class="form-control">
                                                </div>
                                                <div class="form-group  col-sm-8 mx-auto">
                                                    <label for="country_id">{{ __('website.country') }}</label>
                                                    <select id="country_id" name="country_id" required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        @foreach($Countries as $Country)
                                                            <option {{ $Country['id'] == auth('client')->user()->country_id ? 'selected' : '' }}
                                                                value="{{ $Country['id'] }}">{{ $Country['name_' . app()->getLocale()] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <hr style="opacity: 0">

                                                <div class="form-group  col-sm-8 mx-auto">
                                                    <label for="password">{{ __('website.password') }}</label><i class="icon-pencil5 h5 main_color"></i>
                                                    <input type="password" name="password" id="password" parsley-trigger="change"  class="form-control">
                                                </div>
                                                <hr style="opacity: 0">
                                            </div>

                                        </div>






                                        <div class="my-4 text-center">
                                            <button type="submit"
                                                class="main_button main_border py-3 px-5 rounded transition-me h5 main_bold">@lang('website.update')</button>
                                        </div>

                                    </form>

                                    <!--end my data-->

                                </div>
                            </div>
                            <!--end account info-->
                        </div>


                        <div id="myAddress" style="display: none">

                            <!--start my addresses-->
                            <div class="row">
                                <div class="row my-4">
                                        <div class="d-flex">
                                                @foreach ($client->addresses as $key => $address)
                                                <table class="table alert-secondary" style="margin: 5px;">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="{{ route('address.edit',$address['id']) }}"><i class="fa fa-pencil"></i></a>
                                                            </td>
                                                        </tr>
                                                    <tr>
                                                        <td>@lang('website.region')</td>
                                                        <td>{{  $address['region_id']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('website.block')</td>
                                                        <td>{{  $address['block'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('website.road')</td>
                                                        <td>{{  $address['road'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('website.floorNo')</td>
                                                        <td>{{  $address['floor_no'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>@lang('website.apartmentNo')</td>
                                                        <td>{{  $address['apartment'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <form action="{{ route('address.destroy',$address['id']) }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                            <button type="submit" style="border: none;background: none;"> <i class="fa fa-trash-o"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                        </div>
                                </div>
                                <!--end my addresses-->
                                <form action="{{ route('address.create') }}" method="get">
                                    <button type="submit"
                                        class="p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded"><i
                                            class="icon-plus mx-2 main_color"></i>@lang('website.addnewaddress')</button>
                                </form>
                            </div>
                        </div>


                        <div id="myFavourite" style="display: none">
                            @isset($favourit)
                                <!--start favourite-->
                                <div class="row">

                                    <div class="">
                                        @foreach ($favourit as $fav)
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md-3">
                                                    <div class="text-center my-2">
                                                        <a href="{{ route('product.show',$fav['product_id']) }}">
                                                            <img src="{{ getProductImage($fav->product_id) }}"
                                                                class="img-fluid" alt="tomato">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class=" my-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span
                                                                class="h5 main_bold">{{ $fav->product['name_' . app()->getLocale()] }}</span>
                                                            <div class="d-flex">
                                                                <div class="border-right">
                                                                    @auth('client')
                                                                        <i data-id="{{ $fav->product_id }}"
                                                                            class="icon-heart-o h3 mx-2 point main_color transition-me icon-heart7 profileFavorite"></i>
                                                                    @else
                                                                        <i class="icon-heart-o main_color h2 font-weight-bold point" onclick="window.location.href='{{ route('login') }}'"></i>
                                                                    @endauth
                                                                </div>
                                                                <div class="border-left">


                                                                    @if ($fav->product['quantity'] > 0)
                                                                        <button onclick="window.location='{{ route('product.show', $fav->product['id']) }}'"
                                                                            style="text-decoration: none"
                                                                            class="main_button transition-me border-0 w-100 p-2 rounded"><span
                                                                                class="teny_p">@lang('website.addToCart')</span></button>
                                                                    @else
                                                                        <button class="red_button main_border rounded px-4 py-2 transition-me my-2">
                                                                            <i class="icon-bag2 mr-2 h5"></i><span
                                                                                class="tiny_font">@lang('website.outofstock')</span></button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-secondary teny_p my-3">
                                                            {{ $fav->product['desc_' . app()->getLocale()] }}</p>
                                                        <sapn class="main_bold h5">
                                                            @if (hasDiscount($fav->product))
                                                                {{ number_format(($fav->product['price'] - $fav->product['discount']) * currencyValue(), 3) }}
                                                                {{ Session::get('currency') }}
                                                            @else
                                                                {{ number_format($fav->product['price'] * currencyValue(), 3) }}
                                                                {{ Session::get('currency') }}
                                                            @endif
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!--end my favourite-->
                            @endisset
                        </div>


                        <div id="myOrder" style="display: none">
                            <!--start my order-->
                            <div class="row">
                                <div class="other_order">
                                    <ul class="nav nav-pills mb-3">
                                        <li class="nav-item">
                                            <button onclick="showHide2(1)" class="nav-link nav-link-order-1  active h5 p-2"
                                                type="button">@lang('website.currentOrder')</button>
                                        </li>
                                        <li class="nav-item">
                                            <button onclick="showHide2(2)" class="nav-link nav-link-order-2  h5 p-2"
                                                type="button">@lang('website.previousOrder')</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="currentOrder" style="display: block">
                                @isset($currentOrder)
                                    <div class="my-new-order my-4">
                                        <div class="current-order shadow-sm px-2 py-4">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-12 col-md-5">
                                                    <div class="row justify-content-center align-items-center mb-3">
                                                        <div class="col-4">
                                                            <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830.png') }}"
                                                                class="img-fluid" alt="Emumken">
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="px-4">
                                                                <span
                                                                    class="d-block text-center font-weight-bold">{{ date('d-m-Y', strtotime($currentOrder->created_at)) }}</span>
                                                                <span
                                                                    class="d-block text-center font-weight-bold">{{ date('d-m-Y', strtotime($currentOrder->created_at)) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <div class="row justify-content-center">
                                                        <div class="col-5">
                                                            <div class="text-center">
                                                                <span class="font-weight-bold">@lang('website.total') :
                                                                    {{ $currentOrder->net_total }} BHD</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-center">
                                                                <span class="font-weight-bold">@lang('website.orderNo')
                                                                    {{ $currentOrder->id }} BHD</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="text-center">
                                                                <i class="icon-cheveron-down point h4 main_bold"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach ($currentOrder->orderProducts as $item)

                                            <div class="current-inside py-2 shadow-sm text-center">
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-12 col-md-5">
                                                        <div class="row justify-content-center align-items-center">
                                                            <div class="col-6">
                                                                <a href="{{ route('product.show',$item['product_id']) }}">
                                                                <img src="{{ getProductImage($item['product_id']) }}"
                                                                    class="img-fluid" alt="screen">
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="">
                                                                    <span class="font-weight-bold d-block mb-3">@lang('website.name')</span>
                                                                    <span
                                                                        style="font-size: 13px">{{ $item->product->name_en }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <div class="row mt-2">
                                                            <div class="col-4">
                                                                <span class="font-weight-bold d-block mb-3">@lang('website.quantity')</span>
                                                                <span>{{ $item->quantity }}</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="font-weight-bold d-block mb-3">@lang('website.price')</span>
                                                                <span>{{ $item->price }}</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="font-weight-bold d-block mb-3">@lang('website.total')</span>
                                                                <span>{{ number_format($item->quantity * $item->price, 3) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <!--start Steb Delivvered-->

                                        <div class="progr my-5 text-center">
                                            <div class="container">
                                                <div class="row justify-content-center align-items-end">
                                                    <div class="col-2">
                                                        <img src=" {{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (28).png') }}"
                                                            class="img-fluid mx-auto w-50 d-block mb-3" alt="creativity">
                                                        <span class="font-weight-bold">@lang('website.preparing')</span>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="text-line bg-success m-auto"></div>
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (29).png') }}"
                                                            class="img-fluid mx-auto w-50 d-block mb-3" alt="food-delivery">
                                                        <span class="font-weight-bold">@lang('website.inProgress')</span>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="text-line bg-light m-auto"></div>
                                                    </div>
                                                    <div class="col-2">
                                                        <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (30).png') }}"
                                                            class="img-fluid mx-auto w-50 d-block mb-3" alt="delivery-man">
                                                        <span class="font-weight-bold">@lang('website.delivered')</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end Steb Delivvered-->
                                    </div>

                                    <!--start cart total-->

                                    <div class="p-4 bg-light d-none d-md-block">
                                        <div class="container">
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.subTotal') :</span>
                                                <span class="my_bold">
                                                    {{ $currentOrder->sub_total }}</span>
                                            </div>
                                            @if ($currentOrder->discount > 0)
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.discount')
                                                    ({{ $settings['discount']}}%)
                                                    :</span>
                                                <span class="my_bold">
                                                    {{ $currentOrder->discount }}</span>
                                            </div>
                                            @endif
                                            @if ($currentOrder->coupon > 0)
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.coupon')
                                                    :</span>
                                                <span class="my_bold">
                                                    {{ $currentOrder->coupon }}</span>
                                            </div>
                                            @endif
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.vat') ({{ $settings['VAT'] }} %))
                                                    :</span>
                                                <span class="my_bold"> {{ $currentOrder->vat }}</span>
                                            </div>
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.deliveryCost')</span>
                                                <span class="my_bold">
                                                    {{ $currentOrder->delivery_charge }}</span>
                                            </div>
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.netTotal') :</span>
                                                <span class="my_bold">
                                                    {{ $currentOrder->net_total }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end cart total-->
                                @endisset
                            </div>
                            <div id="previousOrder" style="display: none">
                                @isset($previousOrder)

                                    <div class="my-new-order my-4">
                                        <div class="current-order shadow-sm px-2 py-4">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-12 col-md-5">
                                                    <div class="row justify-content-center align-items-center mb-3">
                                                        <div class="col-4">
                                                            <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830.png') }}"
                                                                class="img-fluid" alt="Emumken">
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="px-4">
                                                                <span
                                                                    class="d-block text-center font-weight-bold">{{ date('d-m-Y', strtotime($previousOrder->created_at)) }}</span>
                                                                <span
                                                                    class="d-block text-center font-weight-bold">{{ date('d-m-Y', strtotime($previousOrder->created_at)) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <div class="row justify-content-center">
                                                        <div class="col-5">
                                                            <div class="text-center">
                                                                <span class="font-weight-bold">@lang('website.total') :
                                                                    {{ $previousOrder->net_total }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="text-center">
                                                                <span class="font-weight-bold">@lang('website.orderNo') :
                                                                    {{ $previousOrder->id }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="text-center">
                                                                <i class="icon-cheveron-down point h4 main_bold"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($previousOrder->orderProducts as $item)

                                            <div class="previous-inside py-2 shadow-sm text-center">
                                                <div class="row justify-content-center align-items-center">
                                                    <div class="col-12 col-md-5">
                                                        <div class="row justify-content-center align-items-center">
                                                            <div class="col-6">
                                                                <a href="{{ route('product.show',$item['product_id']) }}">
                                                                    <img src="{{ getProductImage($item['product_id']) }}"
                                                                        class="img-fluid" alt="screen">
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="">
                                                                    <span class="font-weight-bold d-block mb-3">@lang('website.productName')</span>
                                                                    <span
                                                                        style="font-size: 13px">{{ $item->product->name_en }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <div class="row mt-2">
                                                            <div class="col-4">
                                                                <span class="font-weight-bold d-block mb-3">@lang('website.quantity')</span>
                                                                <span>{{ $item->quantity }}</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="font-weight-bold d-block mb-3">@lang('website.price')</span>
                                                                <span>{{ $item->price }}</span>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="font-weight-bold d-block mb-3">@lang('website.total')</span>
                                                                <span>{{ number_format($item->quantity * $item->price, 3) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>


                                    <!--start cart total-->

                                    <div class="p-4 bg-light d-none d-md-block">
                                        <div class="container">
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.subTotal') :</span>
                                                <span class="my_bold">
                                                    {{ $previousOrder->sub_total }}</span>
                                            </div>
                                            @if ($previousOrder->discount > 0)
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">Discount({{ $settings['discount']}}%):</span>
                                                <span class="my_bold">
                                                    {{ $previousOrder->discount }}</span>
                                            </div>
                                            @endif
                                            @if ($previousOrder->coupon > 0)
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.coupon')
                                                    :</span>
                                                <span class="my_bold">
                                                    {{ $previousOrder->coupon }}</span>
                                            </div>
                                            @endif
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">Vat({{ $settings['VAT'] }}%) :</span>
                                                <span class="my_bold"> {{ $previousOrder->vat }}</span>
                                            </div>
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.deliveryCost')</span>
                                                <span class="my_bold">
                                                    {{ $previousOrder->delivery_charge }}</span>
                                            </div>
                                            <div class="sub-total d-flex justify-content-between my-2">
                                                <span class="my_bold">@lang('website.netTotal') :</span>
                                                <span class="my_bold">{{ $previousOrder->net_total }}</span>
                                            </div>
                                        </div>
                                    </div>


                                    <!--end cart total-->
                                @endisset
                            </div>
                        </div>
                    </div>
                    <!--end my order-->
                </div>



            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
