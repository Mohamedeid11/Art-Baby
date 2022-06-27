@extends('website.layout')
@section('content')

    <style>
        .empty-cart {
            width: 50vw;
            margin: 0 auto;
            text-align: center;
            font-family: 'Maison Neue';
            font-weight: 300;
        }
        @media (min-width: 577px){
            svg {
                max-width: 60%;
                padding: 5rem 3rem;
            }
        }
        @media (max-width: 577px){
            .empty-cart {
                width: 100vw;
            }
        }
        svg #oval,
        svg #plus,
        svg #diamond,
        svg #bubble-rounded {
            -webkit-animation: plopp 4s ease-out infinite;
                    animation: plopp 4s ease-out infinite;
        }
        svg #oval:nth-child(1),
        svg #plus:nth-child(1),
        svg #diamond:nth-child(1),
        svg #bubble-rounded:nth-child(1) {
            -webkit-animation-delay: -240ms;
                    animation-delay: -240ms;
        }
        svg #oval:nth-child(2),
        svg #plus:nth-child(2),
        svg #diamond:nth-child(2),
        svg #bubble-rounded:nth-child(2) {
            -webkit-animation-delay: -480ms;
                    animation-delay: -480ms;
        }
        svg #oval:nth-child(3),
        svg #plus:nth-child(3),
        svg #diamond:nth-child(3),
        svg #bubble-rounded:nth-child(3) {
            -webkit-animation-delay: -720ms;
                    animation-delay: -720ms;
        }
        svg #oval:nth-child(4),
        svg #plus:nth-child(4),
        svg #diamond:nth-child(4),
        svg #bubble-rounded:nth-child(4) {
            -webkit-animation-delay: -960ms;
                    animation-delay: -960ms;
        }
        svg #oval:nth-child(5),
        svg #plus:nth-child(5),
        svg #diamond:nth-child(5),
        svg #bubble-rounded:nth-child(5) {
            -webkit-animation-delay: -1200ms;
                    animation-delay: -1200ms;
        }
        svg #oval:nth-child(6),
        svg #plus:nth-child(6),
        svg #diamond:nth-child(6),
        svg #bubble-rounded:nth-child(6) {
            -webkit-animation-delay: -1440ms;
                    animation-delay: -1440ms;
        }
        svg #oval:nth-child(7),
        svg #plus:nth-child(7),
        svg #diamond:nth-child(7),
        svg #bubble-rounded:nth-child(7) {
            -webkit-animation-delay: -1680ms;
                    animation-delay: -1680ms;
        }
        svg #oval:nth-child(8),
        svg #plus:nth-child(8),
        svg #diamond:nth-child(8),
        svg #bubble-rounded:nth-child(8) {
            -webkit-animation-delay: -1920ms;
                    animation-delay: -1920ms;
        }
        svg #oval:nth-child(9),
        svg #plus:nth-child(9),
        svg #diamond:nth-child(9),
        svg #bubble-rounded:nth-child(9) {
            -webkit-animation-delay: -2160ms;
                    animation-delay: -2160ms;
        }
        svg #oval:nth-child(10),
        svg #plus:nth-child(10),
        svg #diamond:nth-child(10),
        svg #bubble-rounded:nth-child(10) {
            -webkit-animation-delay: -2400ms;
                    animation-delay: -2400ms;
        }
        svg #oval:nth-child(11),
        svg #plus:nth-child(11),
        svg #diamond:nth-child(11),
        svg #bubble-rounded:nth-child(11) {
            -webkit-animation-delay: -2640ms;
                    animation-delay: -2640ms;
        }
        svg #oval:nth-child(12),
        svg #plus:nth-child(12),
        svg #diamond:nth-child(12),
        svg #bubble-rounded:nth-child(12) {
            -webkit-animation-delay: -2880ms;
                    animation-delay: -2880ms;
        }
        svg #oval:nth-child(13),
        svg #plus:nth-child(13),
        svg #diamond:nth-child(13),
        svg #bubble-rounded:nth-child(13) {
            -webkit-animation-delay: -3120ms;
                    animation-delay: -3120ms;
        }
        svg #oval:nth-child(14),
        svg #plus:nth-child(14),
        svg #diamond:nth-child(14),
        svg #bubble-rounded:nth-child(14) {
            -webkit-animation-delay: -3360ms;
                    animation-delay: -3360ms;
        }
        svg #oval:nth-child(15),
        svg #plus:nth-child(15),
        svg #diamond:nth-child(15),
        svg #bubble-rounded:nth-child(15) {
            -webkit-animation-delay: -3600ms;
                    animation-delay: -3600ms;
        }
        svg #oval:nth-child(16),
        svg #plus:nth-child(16),
        svg #diamond:nth-child(16),
        svg #bubble-rounded:nth-child(16) {
            -webkit-animation-delay: -3840ms;
                    animation-delay: -3840ms;
        }
        svg #bg-line:nth-child(2) {
            fill-opacity: 0.3;
        }
        svg #bg-line:nth-child(3) {
            fill-opacity: 0.4;
        }
        h3 {
            font-size: 2rem;
            line-height: 2rem;
            margin: 0;
            padding: 0;
            font-weight: 600;
        }
        p {
            color: rgba(0,0,0,0.5);
            font-size: 18px;
            line-height: 24px;
            max-width: 80%;
            margin: 1.25rem auto 0 auto;
        }
        body {
            background: #f2f2f2;
        }
        @-webkit-keyframes plopp {
            0% {
            transform: translate(0, 0);
            opacity: 1;
            }
            100% {
            transform: translate(0, -10px);
            opacity: 0;
            }
        }
        @keyframes plopp {
            0% {
            transform: translate(0, 0);
            opacity: 1;
            }
            100% {
            transform: translate(0, -10px);
            opacity: 0;
            }
        }

    </style>
    <!--start Breadcrumb-->

    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.cart')</h3>
            <nav aria-label="CART">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"
                            class="text-dark main_bold  text-decoration-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.cart')</li>
                </ol>
            </nav>
        </div>
    </div>
    @if (Session::get('cart'))
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
                        <div class="color_cart mx-auto p-3 font-weight-bold rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 70px; height: 70px">
                            <span style="font-size: 20px">2</span>
                        </div>
                        <div class="my-2">
                            <h6 class="main_bold text-center teny_p">@lang('website.paymentAddress')</h6>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="text-line color_cart"></div>
                    </div>
                    <div class="col-2">
                        <div class="color_cart mx-auto p-3 font-weight-bold rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 70px; height: 70px">
                            <span style="font-size: 20px">3</span>
                        </div>
                        <div class="my-2">
                            <h6 class="main_bold text-center">@lang('website.confirmOrder')</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--start cart-->

        <div class="cart my-4">
            <div class="container">

                <div class="main_bg pb-2 px-3 pt-3 rounded">
                    <p class="text-white h4">@lang('website.orderDetails')</p>
                </div>
                @foreach (Session::get('cart') as $key => $item)
                    @php($product = getProduct($item['product_id']) )
                    <div class="my-4">
                        <div class="cart_order py-4 position-relative">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-md-4">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-12 col-md-5 bg-light py-3">
                                            <div class="text-center">
                                                <a href="{{ route('product.show', $item['product_id']) }}">
                                                    <img src="{{ getProductImage($item['product_id']) }}"
                                                        class="img-fluid w-100">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <div class="h-100 text-center">
                                                <div class="mb-4">
                                                    <span class="font-weight-lighter h4">@lang('website.productName')</span>
                                                </div>
                                                <div class="">
                                                    <span
                                                        class="main_bold">{{ $product['name_' . app()->getLocale()] }}</span>

                                                    <br>
                                                    <br>

                                                    <span
                                                        class="main_bold">{{ getSize($item['size_id'])['name_' . app()->getLocale()] ?? '' }}</span>

                                                        <br>
                                                    <br>

                                                    <span
                                                        class="main_bold">{{ getColor($item['color_id'])['name_' . app()->getLocale()] ?? '' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="productRow">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-0 offset-md-1 my-3">
                                                <input type="hidden" value="{{ $key }}" name="cart_id" id="cart_id" />
                                                <input type="hidden" value="{{ $item['product_id']  }}" name="product_id" id="product_id" />
                                                <input type="hidden" value="{{  getProductSize($item['product_id'],$item['size_id'])  }}"  id="product_quantity-{{  $key   }}"/>
                                            </div>
                                            <div class="col-12 col-md-4 my-3">
                                                <div class="h-100 text-center">
                                                    <div class="my-3">
                                                        <span
                                                            class="font-weight-lighter h4">@lang('website.quantity')</span>
                                                    </div>
                                                    <div class="">
                                                        <div class="row justify-content-center">
                                                            <div class="col-12 col-md-8">
                                                                <div class="row count align-items-center my-3">

                                                                    <div class="col-3 h-100 p-0">
                                                                        <div class="mx-0 point quantity-plus p-0 w-100 shadow">
                                                                            <div class="w-100 h-100 d-flex justify-content-center align-items-center main_bg plusCart">
                                                                                <i class="icon-plus text-white font-weight-bold plusCart"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-6">
                                                                        <input style="background: #f2f2f2;" type="number" readonly max="{{ $product['quantity'] }}"  min="1"
                                                                                value="{{ $item['quantity'] }}" name="quantity" class="border-0 h5 pt-2 input_number w-100 text-center">
                                                                    </div>
                                                                    <div class="col-3 h-100 p-0">
                                                                        <div class="mx-0 point quantity-minus p-0 w-100 shadow">
                                                                            <div class="w-100 h-100 d-flex justify-content-center align-items-center main_bg minusCart">
                                                                                <i class="icon-minus text-white font-weight-bold minusCart" ></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
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
                                                    <span class="main_bold proPrice">
                                                        @foreach ($Products as $product)
                                                            @if ($product->id == $item['product_id'] && $item['quantity'] > 0)
                                                                @if ($product->quantity < $item['quantity'])
                                                                    @if (hasDiscount($product))
                                                                        {{ number_format(($product['price'] - $product['discount']) * $currencyValue * $product->quantity, 3) }}
                                                                        {{ Session::get('currency') }}
                                                                    @else
                                                                        {{ number_format($product['price'] * $currencyValue * $product->quantity, 3) }}
                                                                        {{ Session::get('currency') }}
                                                                    @endif
                                                                @else
                                                                    @if (hasDiscount($product))
                                                                        {{ number_format(($product['price'] - $product['discount']) * $currencyValue * $item['quantity'], 3) }}
                                                                        {{ Session::get('currency') }}
                                                                    @else
                                                                        {{ number_format($product['price'] * $currencyValue * $item['quantity'], 3) }}
                                                                        {{ Session::get('currency') }}
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-1 my-3">
                                                <div class="h-100 text-center">
                                                    <div class="mb-4">
                                                        <span class="font-weight-lighter h4">@lang('website.delete')</span>
                                                    </div>
                                                    <button style="border: none" type="submit" form="delete-{{ $key }}">
                                                        <div class="text-center" data-key="{{ $key }}">
                                                            <i class="icon-bin h3 main_color transition-me  point"></i>
                                                        </div>
                                                    </button>
                                                    <form method="POST" action="{{ route('cart.destroy') }}"  id="delete-{{ $key }}">
                                                        <input type="hidden" name="key" value="{{  $key  }}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



                <!--start cart total-->

                <div class="main_bg pb-2 px-3 pt-3 rounded">
                    <p class="text-white h4">@lang('website.cartTotal')</p>
                </div>

                <div class="p-4">
                    <div class="container">
                        <div class="d-flex justify-content-between my-3">
                            <span class="main_bold">@lang('website.subTotal')</span>
                            <span class="main_bold subTotal"></span>
                        </div>
                        @if (Session::get("coupon_type"))
                        <div class="d-flex justify-content-between my-3">
                            <span class="main_bold">@lang('website.coupon')</span>
                            <span class="main_bold coupon"></span>
                        </div>
                        @endif
                        @if ($settings['discount'] > 0)
                        <div class="d-flex justify-content-between my-3">
                            <span class="main_bold">@lang('website.discount') ({{ $settings['discount'] }} %) :</span>
                            <span class="main_bold discount"></span>
                        </div>
                        @endif
                        <div class="d-flex justify-content-between my-3">
                            <span class="main_bold">@lang('website.vat') ({{ $settings['VAT']}} %) :</span>
                            <span class="main_bold vat"></span>
                        </div>
                        <div class="d-flex justify-content-between my-3">
                            <span class="main_bold">@lang('website.deliveryCost') :</span>
                            <span class="main_bold deliveryCost"></span>
                        </div>
                        <div class="d-flex justify-content-between my-3">
                            <span class="main_bold">@lang('website.netTotal'):</span>
                            <span class="main_bold netTotal"></span>
                        </div>
                    </div>
                </div>


                <div class="my-3">
                    <div class="row justify-content-around">
                        <div class="col-12 col-md-6">
                            <form action="{{ route('categories') }}" method="get">
                                <button type="submit"
                                    class="p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded">@lang('website.continueShopping')</button>
                            </form>
                        </div>

                        <div class="col-12 col-md-6">
                            @if (Auth::guard('client')->check())
                                <form action="{{ route('address.index') }}" method="get">
                                    <button
                                        class="p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded">@lang('website.proceedCheckout')</button>
                                </form>
                            @else
                                <button type="button" onclick="window.location.href='{{ route('login') }}'"
                                    class="p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded ">
                                    @lang('website.proceedCheckout')
                                </button>
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>
    @else

    <div class="empty-cart">

        <svg viewBox="656 573 264 182" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect id="bg-line" stroke="none" fill-opacity="0.2" fill="#FFE100" fill-rule="evenodd" x="656" y="624" width="206" height="38" rx="19"></rect>
            <rect id="bg-line" stroke="none" fill-opacity="0.2" fill="#FFE100" fill-rule="evenodd" x="692" y="665" width="192" height="29" rx="14.5"></rect>
            <rect id="bg-line" stroke="none" fill-opacity="0.2" fill="#FFE100" fill-rule="evenodd" x="678" y="696" width="192" height="33" rx="16.5"></rect>
            <g id="shopping-bag" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(721.000000, 630.000000)">
                <polygon id="Fill-10" fill="#FFA800" points="4 29 120 29 120 0 4 0"></polygon>
                <polygon id="Fill-14" fill="#FFE100" points="120 29 120 0 115.75 0 103 12.4285714 115.75 29"></polygon>
                <polygon id="Fill-15" fill="#FFE100" points="4 29 4 0 8.25 0 21 12.4285714 8.25 29"></polygon>
                <polygon id="Fill-33" fill="#FFA800" points="110 112 121.573723 109.059187 122 29 110 29"></polygon>
                <polygon id="Fill-35" fill-opacity="0.5" fill="#FFFFFF" points="2 107.846154 10 112 10 31 2 31"></polygon>
                <path d="M107.709596,112 L15.2883462,112 C11.2635,112 8,108.70905 8,104.648275 L8,29 L115,29 L115,104.648275 C115,108.70905 111.7365,112 107.709596,112" id="Fill-36" fill="#FFE100"></path>
                <path d="M122,97.4615385 L122,104.230231 C122,108.521154 118.534483,112 114.257931,112 L9.74206897,112 C5.46551724,112 2,108.521154 2,104.230231 L2,58" id="Stroke-4916" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <polyline id="Stroke-4917" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="2 41.5 2 29 122 29 122 79"></polyline>
                <path d="M4,50 C4,51.104 3.104,52 2,52 C0.896,52 0,51.104 0,50 C0,48.896 0.896,48 2,48 C3.104,48 4,48.896 4,50" id="Fill-4918" fill="#000000"></path>
                <path d="M122,87 L122,89" id="Stroke-4919" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <polygon id="Stroke-4922" stroke="#000000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="4 29 120 29 120 0 4 0"></polygon>
                <path d="M87,46 L87,58.3333333 C87,71.9 75.75,83 62,83 L62,83 C48.25,83 37,71.9 37,58.3333333 L37,46" id="Stroke-4923" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M31,45 C31,41.686 33.686,39 37,39 C40.314,39 43,41.686 43,45" id="Stroke-4924" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M81,45 C81,41.686 83.686,39 87,39 C90.314,39 93,41.686 93,45" id="Stroke-4925" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M8,0 L20,12" id="Stroke-4928" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M20,12 L8,29" id="Stroke-4929" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M20,12 L20,29" id="Stroke-4930" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M115,0 L103,12" id="Stroke-4931" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M103,12 L115,29" id="Stroke-4932" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
                <path d="M103,12 L103,29" id="Stroke-4933" stroke="#000000" stroke-width="3" stroke-linecap="round"></path>
            </g>
            <g id="glow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(768.000000, 615.000000)">
                <rect id="Rectangle-2" fill="#000000" x="14" y="0" width="2" height="9" rx="1"></rect>
                <rect fill="#000000" transform="translate(7.601883, 6.142354) rotate(-12.000000) translate(-7.601883, -6.142354) " x="6.60188267" y="3.14235449" width="2" height="6" rx="1"></rect>
                <rect fill="#000000" transform="translate(1.540235, 7.782080) rotate(-25.000000) translate(-1.540235, -7.782080) " x="0.54023518" y="6.28207994" width="2" height="3" rx="1"></rect>
                <rect fill="#000000" transform="translate(29.540235, 7.782080) scale(-1, 1) rotate(-25.000000) translate(-29.540235, -7.782080) " x="28.5402352" y="6.28207994" width="2" height="3" rx="1"></rect>
                <rect fill="#000000" transform="translate(22.601883, 6.142354) scale(-1, 1) rotate(-12.000000) translate(-22.601883, -6.142354) " x="21.6018827" y="3.14235449" width="2" height="6" rx="1"></rect>
            </g>
            <polygon id="plus" stroke="none" fill="#7DBFEB" fill-rule="evenodd" points="689.681239 597.614697 689.681239 596 690.771974 596 690.771974 597.614697 692.408077 597.614697 692.408077 598.691161 690.771974 598.691161 690.771974 600.350404 689.681239 600.350404 689.681239 598.691161 688 598.691161 688 597.614697"></polygon>
            <polygon id="plus" stroke="none" fill="#EEE332" fill-rule="evenodd" points="913.288398 701.226961 913.288398 699 914.773039 699 914.773039 701.226961 917 701.226961 917 702.711602 914.773039 702.711602 914.773039 705 913.288398 705 913.288398 702.711602 911 702.711602 911 701.226961"></polygon>
            <polygon id="plus" stroke="none" fill="#FFA800" fill-rule="evenodd" points="662.288398 736.226961 662.288398 734 663.773039 734 663.773039 736.226961 666 736.226961 666 737.711602 663.773039 737.711602 663.773039 740 662.288398 740 662.288398 737.711602 660 737.711602 660 736.226961"></polygon>
            <circle id="oval" stroke="none" fill="#A5D6D3" fill-rule="evenodd" cx="699.5" cy="579.5" r="1.5"></circle>
            <circle id="oval" stroke="none" fill="#CFC94E" fill-rule="evenodd" cx="712.5" cy="617.5" r="1.5"></circle>
            <circle id="oval" stroke="none" fill="#8CC8C8" fill-rule="evenodd" cx="692.5" cy="738.5" r="1.5"></circle>
            <circle id="oval" stroke="none" fill="#3EC08D" fill-rule="evenodd" cx="884.5" cy="657.5" r="1.5"></circle>
            <circle id="oval" stroke="none" fill="#66739F" fill-rule="evenodd" cx="918.5" cy="681.5" r="1.5"></circle>
            <circle id="oval" stroke="none" fill="#C48C47" fill-rule="evenodd" cx="903.5" cy="723.5" r="1.5"></circle>
            <circle id="oval" stroke="none" fill="#A24C65" fill-rule="evenodd" cx="760.5" cy="587.5" r="1.5"></circle>
            <circle id="oval" stroke="#66739F" stroke-width="2" fill="none" cx="745" cy="603" r="3"></circle>
            <circle id="oval" stroke="#EFB549" stroke-width="2" fill="none" cx="716" cy="597" r="3"></circle>
            <circle id="oval" stroke="#FFE100" stroke-width="2" fill="none" cx="681" cy="751" r="3"></circle>
            <circle id="oval" stroke="#3CBC83" stroke-width="2" fill="none" cx="896" cy="680" r="3"></circle>
            <polygon id="diamond" stroke="#C46F82" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" points="886 705 889 708 886 711 883 708"></polygon>
            <path d="M736,577 C737.65825,577 739,578.34175 739,580 C739,578.34175 740.34175,577 742,577 C740.34175,577 739,575.65825 739,574 C739,575.65825 737.65825,577 736,577 Z" id="bubble-rounded" stroke="#3CBC83" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
        </svg>

        <h3>@lang('website.cartIsEmpty')</h3>
      </div>

    @endif

    <div class="featured">
        <div class="container">
            <div class="title py-5 text-center">
                <h1 class="my_bold">@lang('website.relatedProducts')</h1>
            </div>
            <div class="d-none d-md-block">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($featuredProducts as $key => $group)

                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="row pt-4">
                                    @foreach ($group as $product)
                                        <div class="col-md-4">
                                            <div class="shadow p-3 text-center m-3 point">
                                                <a href="{{ route('product.show', $product->id) }}"
                                                    style="text-decoration: none;color: inherit">
                                                    <img style="max-height: 192px;"
                                                        src="{{  $product->images->first()->image }}"
                                                        class="img-fluid" alt="image">
                                                </a>
                                                <div class="my-3">
                                                    <h5 class="my_bold">
                                                        {{ $product['name_' . app()->getLocale()] }}</h5>
                                                    <span class="font-weight-bold">
                                                        @if (hasDiscount($product))
                                                            {{ number_format(($product['price'] - $product['discount']) * $currencyValue, 3) }}
                                                            {{ Session::get('currency') }}
                                                        @else
                                                            {{ number_format($product['price'] * $currencyValue, 3) }}
                                                            {{ Session::get('currency') }}
                                                        @endif
                                                    </span>
                                                </div>


                                                @if ($product['quantity'] > 0)
                                                    <button onclick="window.location='{{ route('product.show', $product->id) }}'"
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
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="position-absolute siden">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <div class="slide_np d-flex justify-content-center align-items-center transition-me rounded">
                                <i class="icon-long-arrow-right h3 m-0"></i>
                            </div>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <div class="slide_np d-flex justify-content-center align-items-center transition-me rounded">
                                <i class="icon-long-arrow-left h3 m-0"></i>
                            </div>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--start sm screen-->
    <div class="d-block d-md-none">
        <div class="row my-5 align-items-center">
            <div class="col-12">
                <div class=" my-2">
                    <div id="carouselExampleControls_san_sm" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($featuredProductsSm as $key2 => $product)
                                <div class="carousel-item {{ $key2 == 0 ? 'active' : '' }}">
                                    <div class="p-2 text-center shadow point main_border">
                                        <div class="px-4 py-3">
                                            <a href="{{ route('product.show', $product['id']) }}"
                                                style="text-decoration: none;color: inherit">
                                                <img style="max-height: 192px;"
                                                    src="{{ $product->images->first()->image }}"
                                                    class="img-fluid">

                                            </a>
                                        </div>
                                        <h4 class="main_bold main_color">
                                            {{ $product['name_' . app()->getLocale()] }}</h4>
                                        <span class="d-block">
                                            @if (hasDiscount($product))
                                                {{ number_format(($product['price'] - $product['discount']) * $currencyValue, 3) }}
                                                {{ Session::get('currency') }}
                                            @else
                                                {{ number_format($product['price'] * $currencyValue, 3) }}
                                                {{ Session::get('currency') }}
                                            @endif
                                        </span>

                                        @if ($product['quantity'] > 0)
                                            <button onclick="window.location='{{ route('product.show', $product['id']) }}'"
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
                            @endforeach
                        </div>
                        <div class="feature d-flex align-items-center">
                            <a class="carousel-control-prev" href="#carouselExampleControls_san_sm" role="button"
                                data-bs-slide="prev">
                                <button
                                    class="slide_np p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded"><i
                                        class="icon-arrow-left text-white font-weight-bold"></i></button>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls_san_sm" role="button"
                                data-bs-slide="next">
                                <button
                                    class="slide_np p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded"><i
                                        class="icon-arrow-right text-white font-weight-bold"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('custom-scripts')
    <script>
        {{$DeliveryCharge = getDeliveryCharge()}}

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

        let discount = subTotal * parseFloat( '{{$settings['discount']  / 100 }}  * $currencyValue ');
        $('.discount').text(discount.toFixed(3) + ' {{ Session::get('currency') }}');

        let vat = ((subTotal - discount) * parseFloat(
            '{{ $settings['VAT']/ 100 }} * $currencyValue'));
        $('.vat').text(vat.toFixed(3) + ' {{ Session::get('currency') }}');

        let deliveryCost = parseFloat('{{ $DeliveryCharge * $currencyValue }} ');
        $('.deliveryCost').text(deliveryCost.toFixed(3) + ' {{ Session::get('currency') }}');

        let netTotal = subTotal - discount + vat + deliveryCost - coupon;
        $('.netTotal').text(netTotal.toFixed(3) + ' {{ Session::get('currency') }}');
    </script>

    <script>
        $(document).ready(function() {
            $(".destroyProduct").click(function() {
                let destroyProduct = $("#destroyProduct");
                let self = $(this);
                destroyProduct.find('input[name="key"]').val($(this).attr('data-key'));
                console.log(destroyProduct.find("[name='_token']").val());
                $.ajax({
                    url: "{{ route('cart.destroy') }}",
                    type: "post",
                    data: {
                        "_token": destroyProduct.find("[name='_token']").val(),
                        "_method": "DELETE",
                        "key": $(this).attr('data-key'),
                    },
                    success: function(response) {
                        self.parent('.cart_order').remove();
                        let subTotal = 0;
                        $('.proPrice').each(function() {
                            subTotal += parseFloat($(this).text().replace(',', ''));
                        });
                        $('.subTotal').text(subTotal.toFixed(3) +
                            ' {{ Session::get('currency') }}');
                        let discount = subTotal * parseFloat(
                            '{{ $settings['discount'] / 100 }}  * $currencyValue ');
                        $('.discount').text(discount.toFixed(3) +
                            ' {{ Session::get('currency') }}');

                        let vat = ((subTotal - discount) * parseFloat(
                            '{{ $settings['VAT']/ 100 }} * $currencyValue'));
                        $('.vat').text(vat.toFixed(3) + ' {{ Session::get('currency') }}');

                        $.get("getDeliveryCharge", function(data) {
                            let deliveryCost = parseFloat(data *
                                '{{ $currencyValue }} ');
                            $('.deliveryCost').text(deliveryCost.toFixed(3) +
                                ' {{ Session::get('currency') }}');
                        });

                        let netTotal = subTotal - discount + vat + deliveryCost;
                        $('.netTotal').text(netTotal.toFixed(3) +
                            ' {{ Session::get('currency') }}');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        Command: toastr["error"]("something went wrong");
                    }
                });
            });

            $('.plusCart').click(function () {
                let self = $(this).closest('.productRow');
                let cart_id = self.find("[name='cart_id']").val();
                let product_id = self.find("[name='product_id']").val();
                let quantity = parseInt(self.find("[name='quantity']").val()) + 1;
                let price = parseFloat(self.children(2).children(2).children(1).children(3)[3].innerText);
                let product_quantity = $('#product_quantity-' + cart_id).val();
                if (quantity  <= product_quantity ) {
                    $.ajax({
                        url: "{{ route('cart.save') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "product_id": product_id,
                            'cart_id':cart_id,
                            "quantity": quantity,
                            'product_quantity':product_quantity
                        },
                        success: function () {

                                var totalValue = parseFloat((price * quantity).toFixed(3)) + ' {{ Session::get('currency') }}';
                                total = self.children(3).children(1).children(2).find('.proPrice');
                                total.text(totalValue);

                                let subTotal = 0;
                                $('.proPrice').each(function () {
                                    subTotal += parseFloat($(this).text().replace(',', ''));
                                });

                                $('.subTotal').text(subTotal.toFixed(3) + ' {{ Session::get('currency') }}');

                                let discount = subTotal * parseFloat('{{ $settings['discount'] / 100 }}  * $currencyValue ');
                                $('.discount').text(discount.toFixed(3) +' {{ Session::get('currency') }}');

                                let vat = ((subTotal - discount) * parseFloat('{{ $settings['VAT']/ 100 }} * $currencyValue'));
                                $('.vat').text(vat.toFixed(3) + ' {{ Session::get('currency') }}');

                                let deliveryCost = parseFloat('{{ $DeliveryCharge * $currencyValue }} ');
                                $('.deliveryCost').text(deliveryCost.toFixed(3) +' {{ Session::get('currency') }}');

                                let netTotal = subTotal - discount + vat + deliveryCost;
                                $('.netTotal').text(netTotal.toFixed(3) + ' {{ Session::get('currency') }}');
                        },
                    });
                }
            });

            $('.minusCart').click(function () {
                let self = $(this).closest('.productRow');
                let cart_id = self.find("[name='cart_id']").val();
                let product_id = self.find("[name='product_id']").val();
                let quantity = parseInt(self.find("[name='quantity']").val()) - 1;
                let price = parseFloat(self.children(2).children(2).children(1).children(3)[3].innerText);
                if(quantity > 0){
                    $.ajax({
                        url: "{{ route('cart.save') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "product_id": product_id,
                            'cart_id':cart_id,
                            "quantity": quantity,
                        },
                        success: function () {
                                var totalValue = parseFloat((price * quantity).toFixed(3)) +
                                    ' {{ Session::get('currency') }}';
                                total = self.children(3).children(1).children(2).find('.proPrice');
                                total.text(totalValue);

                                let subTotal = 0;
                                $('.proPrice').each(function () {
                                    subTotal += parseFloat($(this).text().replace(',', ''));
                                });
                                $('.subTotal').text(subTotal.toFixed(3) +
                                    ' {{ Session::get('currency') }}');

                                let discount = subTotal * parseFloat(
                                    '{{ $settings['discount'] / 100 }}  * $currencyValue ');
                                $('.discount').text(discount.toFixed(3) +
                                    ' {{ Session::get('currency') }}');

                                let vat = ((subTotal - discount) * parseFloat(
                                    '{{ $settings['VAT']/ 100 }} * $currencyValue'));
                                $('.vat').text(vat.toFixed(3) + ' {{ Session::get('currency') }}');

                                let deliveryCost = parseFloat(
                                    '{{ $DeliveryCharge * $currencyValue }} ');
                                $('.deliveryCost').text(deliveryCost.toFixed(3) +
                                    ' {{ Session::get('currency') }}');

                                let netTotal = subTotal - discount + vat + deliveryCost;
                                $('.netTotal').text(netTotal.toFixed(3) +
                                    ' {{ Session::get('currency') }}');
                        },
                    });
                }
            });
        });
    </script>
    <script>
        var selectedQuantity = 1;

        $(document).ready(function() {
            $('.quantity-plus').on('click', function() {
                let self = $(this).closest('.productRow');
                let product_id = self.find("[name='cart_id']").val();
                let product_quantity = $('#product_quantity-' + product_id).val();

                var index = $('.quantity-plus').index(this);
                var quantity = parseInt($('.input_number').eq(index).val());
                if(quantity < parseInt(product_quantity) ){
                    $('.input_number').eq(index).val(quantity + 1);
                }

            });
            $('.quantity-minus').on('click', function() {
                var index = $('.quantity-minus').index(this);
                var quantity = parseInt($('.input_number').eq(index).val());
                if (quantity > 1) {
                    $('.input_number').eq(index).val(quantity - 1);
                }
            });
        });




        var sizeselected = 0;
        var colorselected = 0;

        $('#size').change(function() {
            colorselected =  $(this).val();
            if (sizeselected > 0 && colorselected > 0)
                $('#addtocart').attr('disabled' , false);
        });
        $('#size').change(function() {
            sizeselected =  $(this).val();
            if (sizeselected > 0 && colorselected > 0)
                $('#addtocart').attr('disabled' , false);
        });
    </script>
@endpush
