@extends('website.layout')
@section('content')
<style>
    .price-range-slider {
        width: 100%;
        float: left;
        padding: 10px 20px;

        .range-value {
            margin: 0;

            input {
                width: 100%;
                background: none;
                color: #000;
                font-size: 16px;
                font-weight: initial;
                box-shadow: none;
                border: none;
                margin: 20px 0 20px 0;
            }
        }

        .range-bar {
            border: none;
            background: #000;
            height: 3px;
            width: 96%;
            margin-left: 8px;

            .ui-slider-range {
                background: #06b9c0;
            }

            .ui-slider-handle {
                border: none;
                border-radius: 25px;
                background: #fff;
                border: 2px solid #06b9c0;
                height: 17px;
                width: 17px;
                top: -0.52em;
                cursor: pointer;
            }

            .ui-slider-handle+span {
                background: #06b9c0;
            }
        }
    }

</style>
<!--start Breadcrumb-->

<div class="bread py-5 bg-light text-center">
    <div class="container">
        <h3 class="main_bold">@lang('dashboard.categories')</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent d-flex justify-content-center h5 main_bold">
                <li class=""><a href="{{ route('home') }}" class="text-dark text-decoration-none">@lang('dashboard.home')/</a>
                </li>
                <li class="active" aria-current="page">@lang('dashboard.categories')</li>
                <li>
                    <p> {{ $category['name_' . app()->getLocale()] ?? '' }}</p>
                </li>
            </ol>
        </nav>
    </div>
</div>


<!--start category-->

<div class="category">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <form action="{{ route('search') }}" method="post" enctype="multipart/form-data" id="search">
                    @csrf
                    <div class="">
                        <div class="">
                            <h4 class="main_bold main_color py-3">@lang('dashboard.categories')</h4>
                            @foreach ($categories as $key => $category)
                            <div class="my-3">
                                <div class="row">
                                    <div class="col-2">
                                        <input type="checkbox" class="mx-3 point" name="category[]" value="{{ $category['id'] }}" @if (in_array($category['id'], request()->input('category') ?? $categories->toArray())) checked @endif>
                                    </div>
                                    <div class="col">
                                        <label class="font-weight-bold">
                                            {{ $category['name_' . app()->getLocale()] }}</label>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="my-4">
                            <p>
                                <h4 class="main_bold main_color py-3">@lang('dashboard.Sort by Price')</h4>

                                <input class="text-center" type="text" id="amount" readonly style="border:0; font-weight:bold;width: 100%">
                                <div class="price-range-slider">
                                    <p class="range-value">

                                    </p>
                                    <div id="slider-range" class="range-bar"></div>

                                </div>
                            </p>
                        </div>
                        <input type="hidden" name="min_price" id="min_price">
                        <input type="hidden" name="max_price" id="max_price">
                        <button type="submit" class="main_button main_border rounded py-2 transition-me w-100 mb-2"><span class="">@lang('website.search')</span></button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-9">
                <div class="">
                    <div class="my-3 d-flex justify-content-end">

                        <div class="dropdown">
                            <button class="second_butten border-0 transition-me px-4 py-2 dropdown-toggle h5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                @lang('website.sort')
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <button type="submit" class="dropdown-item h5 py-2" href="#" name="key" value="HP" form="search">@lang('website.Height price')
                                </button>
                                <button type="submit" class="dropdown-item h5 py-2" href="#" name="key" value="LP" form="search">@lang('website.Low price')
                                </button>
                                <button type="submit" class="dropdown-item h5 py-2" href="#" name="key" value="TR" form="search">@lang('website.Top rated')
                                </button>
                                <button type="submit" class="dropdown-item h5 py-2" href="#" name="key" value="NA" form="search">@lang('website.New arrival')
                                </button>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <div class="row">
                            @isset($products)
                            @foreach ($products->get() as $product)
                            <div class="col-12 col-md-4">
                                <div class="px-4 py-3 overflow-hidden my-2">
                                    <a href="{{ route('product.show', $product->id) }}" style="text-decoration: none;color: inherit">
                                        <img style="height: 200px;" src="{{ $product->images->first()->image }}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <h2 style="height: 80px !important;" class="main_bold main_color">
                                    {{  mb_strimwidth($product['name_' . app()->getLocale()], 0, 20, "...")  }}
                                </h2>
                                <span class="d-block h5">
                                    @if (hasDiscount($product))
                                    {{ number_format(($product['price'] - $product['discount']) * $currencyValue, 3) }}
                                    {{ Session::get('currency') }}
                                    @else
                                    {{ number_format($product['price'] * $currencyValue, 3) }}
                                    {{ Session::get('currency') }}
                                    @endif
                                </span>
                                <div class="d-flex justify-content-center justify-content-md-end my-3">

                                    @if ($product->quantity > 0)
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
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('last-js')
<script>
    $(function() {
        $("#slider-range").slider({
            range: true
            , min: 0
            , max: 10000
            , values: [{{ $price[0] ?? 0 }}, {{ $price[1] ?? 10000 }}]
            , slide: function(event, ui) {
                $("#amount").val( "{{ Session::get('currency')  }}" + ui.values[0] + " - {{ Session::get('currency')  }} "+ ui.values[1]);
                $("#min_price").val(ui.values[0]);
                $("#max_price").val(ui.values[1]);
            }
        });
        $("#amount").val(" {{ Session::get('currency')  }} " + $("#slider-range").slider("values", 0) + " -  {{ Session::get('currency')  }} " + $("#slider-range").slider("values", 1));
        $("#min_price").val($("#slider-range").slider("values", 0));
        $("#max_price").val($("#slider-range").slider("values", 1));
    });

</script>
@endsection
