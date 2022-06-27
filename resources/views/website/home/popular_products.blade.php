@if (count($mostselling) > 0)
    <div class="selling">
        <div class="container">
            <div class="title py-5 text-center">
                <h1 class="font-weight-bold">@lang('website.mostselling')</h1>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-between mb-4 p-0" id="myTab" role="tablist">
                @foreach ($mostselling as $key => $category)
                    <li class="nav-item text-center w-25 my_active" role="presentation">
                        <a style="height: 100%;" class="nav-link {{ $key == 0 ? 'active' : '' }} py-3 h3"
                            onclick="changeactive(this.id)" id="nav-{{ $category['id'] }}-tab" data-toggle="tab"
                            href="#nav-{{ $category['id'] }}" role="tab" aria-controls="nav-{{ $category['id'] }}"
                            aria-selected="{{ $key == 0 ? 'true' : '' }}">{{ mb_strimwidth( $category['name_' . app()->getLocale()], 0, 16, "...")   }}</a>
                    </li>
                @endforeach
            </ul>


            <div class="tab-content" id="nav-tabContent">

                <!--START 1-->
                @foreach ($mostselling as $key => $category)
                    <div class="tab-pane fade {{ $key == 0 ? 'show' : '' }} {{ $key == 0 ? 'active' : '' }}"
                        id="nav-{{ $category['id'] }}" role="tabpanel"
                        aria-labelledby="nav-{{ $category['id'] }}-tab">
                        <div class="my-4">
                            <div class="row py-4">
                                    @foreach ($category->products->take(3) as  $product)
                                    <div class="col-md-4">
                                        <div class="shadow p-3 text-center m-3 point">
                                            <a href="{{ route('product.show', $product['id']) }}"
                                                style="text-decoration: none;color: inherit">
                                                <img style="max-height: 192px;"
                                                    src="{{ $product->images->first()->image }}"
                                                    class="img-fluid" alt="image">
                                            </a>
                                            <div class="my-3">
                                                <h5 class="my_bold">
                                                    {{ $product['name_' . app()->getLocale()] }}</h5>
                                                <span class="font-weight-bold">
                                                    @if (hasDiscount($product))
                                                        {{ number_format(($product['price'] - $product['discount']) * $currencyValue, 3) }}
                                                        {{ Session::get('currency') ?? $currencyName }}
                                                    @else
                                                        {{ number_format($product['price'] * $currencyValue, 3) }}
                                                        {{ Session::get('currency') ?? $currencyName }}
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
                    </div>
                @endforeach
                <!--start 2-->
            </div>
        </div>
    </div>


    <script>
        function changeactive(id) {
            $('.nav-link').removeClass('active');
            $('#' + id).addClass('active');
        }
    </script>
@endif
