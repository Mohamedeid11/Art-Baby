@extends('website.layout')
@section('content')
    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">{{ $product['name_' . app()->getLocale()] }}</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class=""><a href="{{ route('home') }}"
                            class="text-dark main_bold  text-decoration-none">@lang('website.home')/</a></li>
                    <li class=""><a href="{{ route('search') }}"
                            class="text-dark main_bold  text-decoration-none">@lang('website.categories')/</a>
                    </li>
                    <li class=" active" aria-current="page">
                        {{ $product->category['name_' . app()->getLocale()] }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!--start nail-->
    <div class="sweat my-4">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <div class="">
                        <div class="gallery">
                            <div class="container">
                                <div class="master-img text-center bg-light p-5">
                                    <img src="{{ $product->images->first()->image}}" class="img-fluid w-100" alt="coffee">
                                </div>
                                <div class="thumbnails d-flex justify-content-between py-3">
                                    @foreach ($product->images as $image)
                                        <div class="w-100 bg-light mx-1 text-center p-1">
                                            <img class="selected" src="{{ $image->image }}"
                                                class="img-fluid point" style="width: 80%" alt="image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="h-100">
                        <div class="d-flex justify-content-between my-4">
                            <h2 class="main_bold point">{{ $product['name_' . app()->getLocale()] }}</h2>
                            <div class="fav">
                                @auth('client')

                                    <i class="icon-heart-o main_color h2 font-weight-bold point @foreach ($favourit as $item) @if ($item->product_id == $product['id'])icon-heart7 @endif @endforeach profileFavorite"
                                        data-id="{{ $product['id'] }}"></i>

                                @else
                                    <i class="icon-heart-o main_color h2 font-weight-bold point" onclick="window.location.href='{{ route('login') }}'"></i>
                                @endauth

                            </div>
                        </div>
                        <div class="my-4">
                            <span class="h4">
                                @if (hasDiscount($product))
                                    <strike
                                        style="font-size: 17px;">{{ number_format($product['price'] * $currencyValue, 3) }}</strike>
                                    {{ number_format(($product['price'] - $product['discount']) * $currencyValue, 3) }}
                                    {{ Session::get('currency') }}
                                @else
                                    {{ number_format($product['price'] * $currencyValue, 3) }}
                                    {{ Session::get('currency') }}
                                @endif
                            </span>
                        </div>
                        <div class="my-4 d-flex align-items-center">
                            @if(count($product->reviews) > 0 )
                                <div class="rating" data-rate="{{ $product->reviews->first()->rate}}"></div>
                            @else
                                <div class="rating" data-rate=""></div>
                            @endif
                            <span style="font-size: 16px">({{ count($product->reviews) }}
                                @lang('website.Reviews'))</span>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-9">
                                <div class="py-4 main_over">
                                    <p class="h5">
                                        <span>{{ $product['desc_' . app()->getLocale()] }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <form action="{{ route('cart.store') }}" method="Post" enctype="multipart/form-data" id="addtocartform">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id" />
                            @if(hasSizeAndColor($product['id']))
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="color">@lang('dashboard.color')</label>
                                    <select id="color" name="color" required class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option value="0" disabled selected hidden>------</option>
                                        @foreach ($product['color'] as $color)
                                            <option value="{{ $color['id'] }}">
                                                {{ $color['name_' . app()->getLocale()] }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="size">@lang('dashboard.size')</label>
                                    <select id="size" name="size" required class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg example">
                                        <option value="0" disabled selected hidden>------</option>
                                        @foreach ($product['size'] as $size)
                                            @if (getProductSize($product->id,$size['id']) > 0 )
                                            <option value="{{ $size['id'] }}">{{ $size['name_' . app()->getLocale()] }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="my-4">
                                <div class="row ">
                                    <div class="col-12 col-md-4 count my-2">
                                        <div class="row count align-items-center my-3">
                                            <div class="col-3 p-0">
                                                <div class="mx-0 point quantity-plus p-0 w-100 shadow">
                                                    <div
                                                        class="w-100 h-100 d-flex justify-content-center align-items-center p-3 main_bg">
                                                        <i class="icon-plus text-white font-weight-bold"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <input type="number" min="0" value="{{  $product->quantity  }}"
                                                    readonly class="border-0 h5 pt-2 input_number w-100 text-center"
                                                    name="quantity" id="quantity">
                                            </div>

                                            <div class="col-3 p-0">
                                                <div class="mx-0 point quantity-minus p-0 w-100 shadow">
                                                    <div
                                                        class="w-100 h-100 d-flex justify-content-center align-items-center p-3 main_bg">

                                                        <i class="icon-minus text-white font-weight-bold"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-7">
                                        <div class="d-flex justify-content-center justify-content-md-end my-3">
                                            <a id="addtocart" style="text-decoration: none;cursor: pointer;"
                                                class="main_button border-0 rounded h4 transition-me px-4 py-2  my-2">
                                                <i class="icon-bag2 h4 mx-2"></i>@lang('website.addToCart')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                                <p class="text-danger">{{ __('website.quantity') . ' '  . __('website.notAvailable') }}</p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <!--start nav description-->

    <div class="description">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active h5" id="nav-Description-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-Description" type="button" role="tab" aria-controls="nav-Description"
                        aria-selected="true">@lang('website.description')</button>
                    <button class="nav-link h5" id="nav-Reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-Reviews"
                        type="button" role="tab" aria-controls="nav-Reviews" aria-selected="false">@lang('website.Reviews')
                        {{ count($product->reviews) }}</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <!--1-->
                <div class="tab-pane fade show active" id="nav-Description" role="tabpanel"
                    aria-labelledby="nav-Description-tab">

                    <div class="my-5">
                        <p class="h5">{{ $product['desc_' . app()->getLocale()] }}</p>
                    </div>

                </div>

                <!--2-->
                <div class="tab-pane fade" id="nav-Reviews" role="tabpanel" aria-labelledby="nav-Reviews-tab">

                    <div class="py-4">
                        <div class="d-flex justify-content-end">
                            @auth('client')
                                <div class="my-4 pop_review">
                                    <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (14).png') }}"
                                        class="img-fluid mx-2">
                                    <span class="h4 point second_link transition-me">@lang('website.addReview')</span>
                                </div>
                            @else
                                <div class="my-4 login">
                                    <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (14).png') }}"
                                        class="img-fluid mx-2">
                                    <span class="h4 point second_link transition-me">@lang('website.addReview')</span>
                                </div>
                            @endauth

                            <div class="popup" id="pop_reviews">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <div
                                        class="insert_1 text-center bg-white d-flex justify-content-center align-items-center p-4">
                                        <div class="text-center w-100 h-100">
                                            <form action="{{ route('review') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <h2 class="main_bold">@lang('website.addReview')</h2>
                                                <div class="my-rating"></div>
                                                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                                <input type="hidden" name="rate" id="rate">
                                                <textarea class="border w-100 rounded p-2 w-100 mt-4" rows="4" cols="15"
                                                    name="comment"></textarea>
                                                <div class="d-flex justify-content-center my-3">
                                                    <button
                                                        class="main_button border-0 py-2 px-5 rounded transition-me main_bold">@lang('website.submit')</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($product->reviews as $review)
                            <div class="card border-0 shadow py-2">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-2">
                                        <div>
                                            <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}"
                                                class="img-fluid rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <div>
                                            <div class="d-flex">
                                                <span class="main_bold h4">{{ $review->client['first_name'] }}
                                                    {{ $review->client['last_name'] }}</span>
                                                <div class="rating" data-rate="{{ $review->rate }}"></div>
                                            </div>
                                            <div class="">
                                                <p class="teny_p text-secondary">{{ $review->review }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('website.product.related')
@endsection
@push('custom-scripts')
    <script src="{{ asset('website/assets_en/star-rating-svg-master/dist/jquery.star-rating-svg.min.js') }}"></script>
    <script>
        $(".my-rating").starRating({
            starSize: 25,
            useFullStars: true,
            callback: function(currentRating, $el) {
                $("#rate").val(currentRating);
            }
        });
        $('.rating').each(function() {
            let rate = $(this).attr('data-rate');
            $(this).starRating({
                starSize: 18,
                useFullStars: true,
                readOnly: true,
                initialRating: rate,
                useGradient: false,
                cursor: 'default',
            });
        });


        var selectedQuantity = 0;

        $(document).ready(function() {
            $('.quantity-plus').on('click', function() {
                var index = $('.quantity-plus').index(this);
                var quantity = parseInt($('.input_number').eq(index).val());
                if (quantity < selectedQuantity) {
                    $('.input_number').eq(index).val(quantity + 1);
                }
            });
            $('.quantity-minus').on('click', function() {
                var index = $('.quantity-minus').index(this);
                var quantity = parseInt($('.input_number').eq(index).val());
                if (quantity > 0) {
                    $('.input_number').eq(index).val(quantity - 1);
                }
            });


        });


        var sizeselected = 0;
        var colorselected = 0;
        $("#addtocart").on("click", function(){
            if (sizeselected == 0 )
                toastr.error('@lang('messages.PleaseSelectSize')');
            if ( colorselected == 0)
                toastr.error('@lang('messages.PleaseSelectColor')');
            if ( $('#quantity').val() == 0)
                toastr.error('@lang('messages.quantityrequired')');
            if ( colorselected != 0 && sizeselected != 0 && $('#quantity').val() > 0)
                $("#addtocartform").submit();

        });


        $('#color').change(function() {
            colorselected = $(this).val();
        });
        $('#size').change(function() {
            sizeselected = $(this).val();
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('getsizequantity') }}',
                data: {
                    'size_id': $(this).val(),
                    'product_id': {{ $product['id'] }}
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(data) {
                    selectedQuantity = data.success;
                    $('#quantity').val(0);
                    $('#quantity').attr('max', data.success);
                }
            });
        });
    </script>
@endpush
