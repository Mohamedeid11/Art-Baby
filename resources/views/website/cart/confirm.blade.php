@extends('website.layout')
@section('content')
    <!--start Breadcrumb-->

    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.confirmOrder')</h3>
            <nav aria-label="CART">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class="breadcrumb-item"><a href="#"
                            class="text-dark main_bold  text-decoration-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.confirmOrder')</li>
                </ol>
            </nav>
        </div>
    </div>


    <!--start rance-->

    <div class="rance py-4">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-2">
                    <div class="main_bg mx-auto p-3 font-weight-bold rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 70px; height: 70px">
                        <span style="font-size: 20px" class="text-white">1</span>
                    </div>
                    <div class="my-2">
                        <h6 class="main_bold text-center">@lang('website.cart')</h6>
                    </div>
                </div>
                <div class="col-3">
                    <div class="text-line main_bg"></div>
                </div>
                <div class="col-2">
                    <div class="main_bg mx-auto p-3 font-weight-bold rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 70px; height: 70px">
                        <span class="text-white" style="font-size: 20px">2</span>
                    </div>
                    <div class="my-2">
                        <h6 class="main_bold text-center teny_p">@lang('website.paymentAddress')</h6>
                    </div>
                </div>
                <div class="col-3">
                    <div class="text-line main_bg"></div>
                </div>
                <div class="col-2">
                    <div class="main_bg mx-auto p-3 font-weight-bold rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 70px; height: 70px">
                        <span class="text-white" style="font-size: 20px">3</span>
                    </div>
                    <div class="my-2">
                        <h6 class="main_bold text-center">@lang('website.confirmOrder')</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--start confirm_order-->

    <div class="confirm_order">
        <div class="container">

            <!--start costomer-->

            <div class="main_bg rounded p-3 my-3">
                <h5 class="text-white main_bold pt-1">@lang('website.addressDetails')</h5>
            </div>

            <ul class="my-3 list-unstyled">
                <li class="my-3"><i class="icon-home6 h4 mx-3 main_color"
                        style={{ App::isLocale('ar') ? ' float:right' : '' }}></i>
                    <table class="table">
                        <tbody>
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
                        </tbody>
                    </table>
                </li>
                <li class="my-3"><i class="icon-phone h4 mx-3 main_color"
                        style={{ App::isLocale('ar') ? ' float:right' : '' }}></i>{{ $address['phone'] }}
                </li>
            </ul>


            <!--end costomer-->



            <div class="main_bg rounded p-3 my-3">
                <h5 class="text-white main_bold pt-1">@lang('website.orderDetails')</h5>
            </div>


            <!--start cart and delete-->

            @foreach (Session::get('cart') as $item)
                @php( $product = getProduct($item['product_id'])  )
                <div class="cart_order py-4 position-relative">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 col-md-4">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-md-5">
                                    <div class="">
                                        <img src="{{ getProductImage($item['product_id']) }}" class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="h-100 text-center">
                                        <div class="mb-4">
                                            <span class="font-weight-lighter h4">@lang('website.productName')</span>
                                        </div>
                                        <div class="">
                                            <span
                                                class="main_bold">{{ mb_strimwidth( $product['name_' . app()->getLocale()], 0, 20, "...") }}</span>
                                            <br>
                                            <span class="main_bold">
                                               @lang('dashboard.size')  {{ getSize($item['size_id'])['name_' . app()->getLocale()] ?? '' }}
                                               ,@lang('website.color') {{ getColor($item['color_id'])['name_' . app()->getLocale()] ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12 col-md-4 my-3">
                                        <div class="h-100 text-center">
                                            <div class="mb-4">
                                                <span class="font-weight-lighter h4">@lang('website.quantity')</span>
                                            </div>
                                            <div class="">
                                                <span class="main_bold">{{ $item['quantity'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-3">
                                        <div class="h-100 text-center">
                                            <div class="mb-4">
                                                <span class="font-weight-lighter h4">@lang('website.price')</span>
                                            </div>
                                            <div class="">
                                                <span class="main_bold">

                                                    @if (hasDiscount($product))
                                                        {{ number_format(($product['price'] - $product['discount']) * $currencyValue, 3) }}
                                                        {{ Session::get('currency') }}
                                                    @else
                                                        {{ number_format($product['price'] * $currencyValue, 3) }}
                                                        {{ Session::get('currency') }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 my-3">
                                        <div class="h-100 text-center">
                                            <div class="mb-4">
                                                <span class="font-weight-lighter h4">@lang('website.total')</span>
                                            </div>
                                            <div class="">
                                                <span class="main_bold proPrice">
                                                    @if (hasDiscount($product))
                                                        {{ number_format(($product['price'] - $product['discount']) * $currencyValue * $item['quantity'], 3) }}
                                                        {{ Session::get('currency') }}
                                                    @else
                                                        {{ number_format($product['price'] * $currencyValue * $item['quantity'], 3) }}
                                                        {{ Session::get('currency') }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="main_bg rounded p-3 my-3">
                <h5 class="text-white main_bold pt-1">@lang('website.useCoupon')</h5>
            </div>

            <form action="{{ route('addcouponcode') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="p-3 h-100 border shadow-sm  d-flex align-items-center">
                        <div class="d-flex justify-content-between my-3 col-6">
                            <input required placeholder="@lang('website.haveCode')"  type="text" class="w-100 shadow my-2 px-5 py-3 border-0 form-control" id="coupon_code" name="coupon_code"
                                placeholder="ABC">
                        </div>
                        <div class="col-6">
                            <button
                                class="main_button main_border py-3 w-100 rounded transition-me main_bold my-4">
                                @lang('website.submit') @lang('dashboard.discount')</button>
                        </div>
                    </div>
                    <label id"textmessage" class="col-12" style="margin-top: -30px;color: red;display: none;">This Product Have No Discount</label>
                </div>
            </form>


            <div class="main_bg rounded p-3 my-3">
                <h5 class="text-white main_bold pt-1">@lang('website.selectPaymentMethod')</h5>
            </div>

            <!--start payment method-->

            <div class="payment w-100 my-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            @foreach ($paymentMethods as $key => $method)
                                @if ($method['display'])
                                    <div class="form-check my-4 mx-3">
                                        <input class="form-check-input" type="radio" id="exampleRadios{{ $method['id'] }}"
                                            value="{{ $method['id'] }}" name="payment"
                                            {{  $method['id'] == session()->get('key')  ? 'checked' : '' }}
                                            form="paymentForm">
                                        <label class="form-check-label w-100" for="exampleRadios{{ $method['id'] }}">
                                            <div class="row justify-content-between">
                                                <div class="col">
                                                    <div>{{ $method['name_' . app()->getLocale()] }}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="text-center">
                                                        @if ($method['id'] == 1)
                                                            <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_043bf700-aa6d-4414-9c17-f78ece221c72 (62).png') }}"
                                                                class="img-fluid" alt="money">
                                                        @elseif($method['id'] == 2)
                                                            <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_043bf700-aa6d-4414-9c17-f78ece221c72 (61).png') }}"
                                                                class="img-fluid" alt="money">
                                                        @else
                                                            <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_043bf700-aa6d-4414-9c17-f78ece221c72 (60).png') }}"
                                                                class="img-fluid" alt="money">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="col-12 col-md-6">
                            <!--start cart total-->
                            <form action="{{ route('cart.postconfirm', $address['id']) }}" method="post" id="paymentForm">
                                @csrf
                                <div class="p-3 h-100 border shadow-sm mx-3 d-flex align-items-center">
                                    <div class="container">
                                        <div class="p-2">
                                            <div class="d-flex justify-content-between my-3">
                                                <span class="main_bold">@lang('website.subTotal') :</span>
                                                <span class="main_bold subTotal" id="subTotalSpan"></span>
                                                <input id="subTotal" type="hidden" name="subTotal" value="">
                                            </div>
                                            @if (Session::get("coupon_type"))
                                            <div class="d-flex justify-content-between my-3">
                                                <span class="main_bold">@lang('website.coupon') :</span>
                                                <span class="main_bold coupon" id="couponSpan"></span>
                                                <input id="coupon" type="hidden" name="coupon" value="">
                                            </div>
                                            @endif
                                            @if ( $settings['discount']  != 0)
                                                <div class="d-flex justify-content-between my-3">
                                                    <span class="main_bold">@lang('website.discount')
                                                        ({{ $settings['discount'] }} %) :</span>
                                                    <span class="main_bold discount" id="discountSpan"></span>
                                                    <input id="discount" type="hidden" name="discount" value="">
                                                </div>
                                            @endif
                                            <div class="d-flex justify-content-between my-3">
                                                <span class="main_bold">@lang('website.vat') ({{ $settings['VAT'] }}%) :</span>
                                                <span class="main_bold vat" id="vatSpan"></span>
                                                <input id="vat" type="hidden" name="vat" value="">
                                            </div>
                                            <div class="d-flex justify-content-between my-3">
                                                <span class="main_bold">@lang('website.deliveryCost')</span>
                                                <span class="main_bold deliveryCost" id="deliveryCostSpan"></span>
                                                <input id="deliveryCost" type="hidden" name="deliveryCost" value="">
                                            </div>
                                            <div class="d-flex justify-content-between my-3">
                                                <span class="main_bold">@lang('website.netTotal'):</span>
                                                <span class="main_bold netTotal" id="netTotalSpan"></span>
                                                <input id="netTotal" type="hidden" name="netTotal" value="">
                                            </div>
                                        </div>
                                        <div class="my-2">
                                            <button
                                                class="main_button main_border py-3 w-100 rounded transition-me main_bold my-4">@lang('website.placeOrder')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end cart total-->
                        </div>
                    </div>
                </div>
            </div>

            <!--end payment method-->

        </div>
    </div>
@endsection





@push('custom-scripts')
    <script>
        let subTotal = 0;
        $('.proPrice').each(function() {
            subTotal += parseFloat($(this).text().replace(',', ''));
        });
        $('.subTotal').text(subTotal.toFixed(3) + ' {{ Session::get('currency') }}');

        let coupon = 0;
        if('{{ Session::get("coupon_type") }}' == "percent_off" || '{{ Session::get("coupon_type") }}' == "discount") {
            if('{{ Session::get("coupon_type") }}' == "percent_off" ) {
                coupon = parseFloat( ( subTotal / 100 ) * {{ Session::get("coupon") ?? 100 }} )
            }
            if( '{{ Session::get("coupon_type") }}' == "discount") {
                coupon =  parseFloat({{ Session::get("coupon") }})
            }
        }else{
            coupon = 0 ;
        }
        $('.coupon').text(coupon.toFixed(3) + ' {{ Session::get('currency') }}');

        let discount = subTotal * parseFloat(
            '{{ $settings['discount'] / 100 }}  * $currencyValue ');
        $('.discount').text(discount.toFixed(3) + ' {{ Session::get('currency') }}');

        let vat = ((subTotal - discount) * parseFloat(
            '{{ $settings['VAT'] / 100 }} * $currencyValue'));
        $('.vat').text(vat.toFixed(3) + ' {{ Session::get('currency') }}');

        let deliveryCost = parseFloat('{{ getDeliveryCharge() * $currencyValue }} ');
        $('.deliveryCost').text(deliveryCost.toFixed(3) + ' {{ Session::get('currency') }}');

        let netTotal = subTotal - discount + vat + deliveryCost - coupon;
        $('.netTotal').text(netTotal.toFixed(3) + ' {{ Session::get('currency') }}');
    </script>
    <script>
        $(document).ready(function() {
            var subTotaldata = $('#subTotalSpan').html();
            $('#subTotal').val(parseFloat(subTotaldata));

            var coupondata = $('#couponSpan').html();
            $('#coupon').val(parseFloat(coupondata));

            var discountdata = $('#discountSpan').html();
            $('#discount').val(parseFloat(discountdata));

            var vatdata = $('#vatSpan').html();
            $('#vat').val(parseFloat(vatdata));

            var deliveryCostdata = $('#deliveryCostSpan').html();
            $('#deliveryCost').val(parseFloat(deliveryCostdata));

            var netTotaldata = $('#netTotalSpan').html();
            $('#netTotal').val(parseFloat(netTotaldata));
        });
    </script>

    <script>
        $('input[type=radio][name=payment]').change(function() {
            $.ajax({
                url: "{{ route('cash.change') }}",
                type:"POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id":this.value,
                },
                success: function (response) {
                    var id = {{ session()->get('address_id') }};
                    var url = '{{ route('cart.confirm', ':id') }}';
                    url = url.replace(':id', id);
                    document.location.href = url;
                }
            });
        });
    </script>
@endpush
