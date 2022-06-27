@if (count($featuredProducts) > 0)
<div class="featured">
    <div class="container">
        <div class="title py-5 text-center">
            <h1 class="my_bold">@lang('website.featured')</h1>
        </div>
        <div class="d-none d-md-block">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
{{--                    the first loop is to put the group--}}

                @foreach ($featuredProducts as $key => $group)

                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="row pt-4">
                            @foreach ($group as $product)
                            <div class="col-md-4">
                                <div class="shadow p-3 text-center m-3 point">
                                    <a href="{{ route('product.show', $product->id) }}" style="text-decoration: none;color: inherit">
                                        <img style="max-height: 192px;" src="{{ $product->images->first()->image }}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="my-3">
                                        <h5 class="my_bold">
{{--                                            here he is putting the name of the product with condition if the name charecter more than 20 charecter putting ..--}}
                                            {{ mb_strimwidth( $product['name_' . app()->getLocale()], 0, 20, "...")  }}</h5>
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
                    </div>
                    @endforeach

                </div>
                <div class="position-absolute siden">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <div class="slide_np d-flex justify-content-center align-items-center transition-me rounded">
                            <i class="icon-long-arrow-right h3 m-0"></i>
                        </div>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <div class="slide_np d-flex justify-content-center align-items-center transition-me rounded">
                            <i class="icon-long-arrow-left h3 m-0"></i>
                        </div>
                    </button>
                </div>
            </div>

        </div>



        @empty(!$category_f)
        <div class="col-12 col-md-5">
            <div class="position-relative">
                <img src="{{ $category_f->image ?? '' }}" class="img-fluid" alt="bags">
                <div class="sunglass position-absolute h-100 w-100 p-3">
                    <div class="">
                        <h1 class="font-weight-bold">{{ $category_f['title'] ?? '' }}
                        </h1>
                        <h2 class="px-3">New Offers</h2>
                        <div class="mx-3">
                            <form action="{{ route('product.show', $category_f['product_id']) }}" enctype="multipart/form-data" method="GET">
                                <button type="submit" class="second_button main_border py-2 px-5 h4 transition-me">More</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endempty
    </div>
</div>
@endif


@if (count($featuredProductsSm) > 0)
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
                                    <a href="{{ route('product.show', $product['id']) }}" style="text-decoration: none;color: inherit">
                                        <img style="max-height: 192px;" src="{{ $product['id'] }}" class="img-fluid">

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
                        <a class="carousel-control-prev" href="#carouselExampleControls_san_sm" role="button" data-bs-slide="prev">
                            <button class="slide_np p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded"><i class="icon-arrow-left text-white font-weight-bold"></i></button>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls_san_sm" role="button" data-bs-slide="next">
                            <button class="slide_np p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded"><i class="icon-arrow-right text-white font-weight-bold"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty(!$category_f)
        <div class="col-12">
            <div class="position-relative my-2">
                <img src="{{ $category_f->image ?? '' }}" class="img-fluid" alt="bags">
                <div class="sunglass position-absolute h-100 w-100 p-3">
                    <div class="">
                        <h1 class="font-weight-bold">{{ $category_f['title'] ?? '' }}
                        </h1>
                        <h2 class="px-3">New Offers</h2>
                        <div class="mx-3">
                            <form action="{{ route('product.show', $category_f['product_id']) }}" enctype="multipart/form-data" method="GET">
                                <button type="submit" class="second_button main_border py-2 px-5 h4 transition-me">More</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endempty
    </div>
</div>
@endif
