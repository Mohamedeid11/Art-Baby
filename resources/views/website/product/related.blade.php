<div class="brand my-4">

    <div class="">

        <div class="title py-5 text-center">
            <h1 class="font-weight-bold">@lang('website.relatedProducts')</h1>
        </div>

        <div class="d-none d-md-block">


            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                <div class="container">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row pt-4">

                                @foreach ($products as $key => $product)
                                <div class="col-md-4">
                                    <div class="shadow p-3 text-center m-3 point">
                                        <a href="{{ route('product.show', $product['id']) }}"
                                            style="text-decoration: none;color: inherit">
                                            <img style="max-height: 192px;"
                                                src="{{ $product->images->first()->image }}" class="img-fluid"
                                                alt="image">
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
                                            <a href="{{ route('product.show', $product['id']) }}"
                                                style="text-decoration: none"
                                                class="main_button transition-me border-0 w-100 p-2 rounded"><span
                                                    class="teny_p">@lang('website.addToCart')</span></a>
                                        @else
                                            <a class="red_button main_border rounded px-4 py-2 transition-me my-2">
                                                <i class="icon-bag2 mr-2 h5"></i><span
                                                    class="tiny_font">@lang('website.outofstock')</span></a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach


                            </div>

                        </div>
                    </div>

                </div>

                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <div class="slide_np d-flex justify-content-center align-items-center transition-me rounded">
                        <i class="icon-long-arrow-left h3 m-0"></i>
                    </div>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <div class="slide_np d-flex justify-content-center align-items-center transition-me rounded">
                        <i class="icon-long-arrow-right h3 m-0"></i>
                    </div>
                </button> --}}


                <div class="d-block d-md-none">

                    <div id="carouselExampleControls_p2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="shadow p-3 text-center m-3 point">
                                    {{-- <img src="assets/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (13).png" class="img-fluid" alt="image"> --}}
                                    <div class="my-3">
                                        <h5 class="my_bold">Baby suit</h5>
                                        <span class="font-weight-bold">4.000 BHD</span>
                                    </div>
                                    <button class="main_button transition-me border-0 w-100 p-2 rounded"><i
                                            class="icon-bag2 mr-2"></i><span
                                            class="teny_p">@lang('website.addToCart')</span></button>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="shadow p-3 text-center m-3 point">
                                    {{-- <img src="assets/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (13).png" class="img-fluid" alt="image"> --}}
                                    <div class="my-3">
                                        <h5 class="my_bold">Baby suit</h5>
                                        <span class="font-weight-bold">4.000 BHD</span>
                                    </div>
                                    <button class="main_button transition-me border-0 w-100 p-2 rounded"><i
                                            class="icon-bag2 mr-2"></i><span
                                            class="teny_p">@lang('website.addToCart')</span></button>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="shadow p-3 text-center m-3 point">
                                    {{-- <img src="assets/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (13).png" class="img-fluid" alt="image"> --}}
                                    <div class="my-3">
                                        <h5 class="my_bold">Baby suit</h5>
                                        <span class="font-weight-bold">4.000 BHD</span>
                                    </div>
                                    <button class="main_button transition-me border-0 w-100 p-2 rounded"><i
                                            class="icon-bag2 mr-2"></i><span
                                            class="teny_p">@lang('website.addToCart')</span></button>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>

</div>
