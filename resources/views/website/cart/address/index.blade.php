@extends('website.layout')
@section('content')
    <!--start Breadcrumb-->

    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.paymentAddress')</h3>
            <nav aria-label="CART">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"
                            class="text-dark main_bold  text-decoration-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.paymentAddress')</li>
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


    <!--start cart_address-->


    <div class="cart_address">
        <div class="container">
            <div class="my-4">
                <div class="row">
                    @foreach ($addressess as $key => $address)
                        <div class="col-md-6 col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="address" style="font-size: 30px"
                                        value="{{ $address['id'] }}" checked>
                                    @lang('website.Address') {{ $key + 1 }}
                                </label>
                            </div>
                            <div class="bg-light p-3 rounded">
                                <ul class="my-3 list-unstyled">
                                    <li class="my-3"><i class="icon-home6 h4 mx-3 main_color"
                                            style={{ App::isLocale('ar') ? ' float:right' : '' }}></i>
                                        <table class="table">
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
                                        </table>
                                    </li>
                                    <li class="my-3"><i class="icon-phone h4 mx-3 main_color"
                                            style={{ App::isLocale('ar') ? ' float:right' : '' }}></i>{{ $address['phone'] }}
                                    </li>
                                </ul>
                            </div>
                            </br>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <form action="{{ route('address.create') }}" method="get">
                            <button type="submit"
                                class="p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded"><i
                                    class="icon-plus mx-2 main_color"></i>@lang('website.addnewaddress')</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        @if (Count($addressess) > 0 && session()->get('cart') && count(session()->get('cart')) > 0)
                            <button onclick="javascript:showfunction()"
                                class="p-3 main_button main_border w-100 my-2 font-weight-bold transition-me rounded">@lang('website.next')</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-scripts')
    <script>
        $('.deleteAddress').click(function(e) {
            e.preventDefault();
            $(this).next().submit();
        })

        function showfunction() {
            var id = document.querySelector('input[name = "address"]:checked').value;
            var url = '{{ route('cart.confirm', ':id') }}';
            url = url.replace(':id', id);
            document.location.href = url;
        }
    </script>
@endpush
