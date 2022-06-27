@extends('website.layout')
@section('content')
    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.brands')</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"
                            class="text-dark text-decoratino-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.brands')</li>
                </ol>
            </nav>
        </div>
    </div>


    <!--start brands-->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <form action="{{ route('searchBrands') }}" method="POST" enctype="multipart/form-data"
                        id="searchBrands">
                        @csrf
                        <h4 class="main_bold main_color py-3">@lang('dashboard.agents')</h4>
                        <div class="my-3">
                            <div>
                                <div class="my-3">
                                    <input type="search" class="border rounded py-3 px-5 w-100" placeholder="Brand"
                                        name="brand" value="{{ $brand ?? '' }}">
                                </div>
                                <button type="submit"
                                    class="main_button main_border rounded py-2 transition-me w-100 mb-2"><span
                                        class="">Search</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-9">
                    <div class="my-3">
                        <div class="row">
                            @isset($brands)
                                @foreach ($brands as $brand)
                                    <div class="col-12 col-md-4">
                                        <div class="text-center">
                                            <button type="submit" class="dropdown-item" name="key" value="{{ $brand['id'] }}"
                                                form="searchBrands">
                                                <img src="{{ $brand->image }}" class="img-fluid d-block point">
                                                @if (app()->getLocale() == 'ar')
                                                    <span class="h4 font-weight-bold">{{ $brand['name'] }}</span>
                                                @else
                                                    <span class="h4 font-weight-bold">{{ $brand['name_en'] }}</span>
                                                @endif
                                            </button>
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
@endsection
