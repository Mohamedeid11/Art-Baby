@extends('website.layout')
@section('content')
    <div class="bread py-5 bg-light text-center">
        <div class="container">
            <h3 class="main_bold">@lang('website.categories')</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark main_bold  text-decoration-none">@lang('website.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('website.categories')</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--start categories-->

    <div class="brands">
        <div class="container">
            <div class="row">
                    <form action="{{ route('searchCategories') }}" method="POST" enctype="multipart/form-data"
                        id="searchCategories">
                        @csrf
                        <div class="my-3">
                            <div>
                          </div>
                        </div>
                    </form>
                <div class="col-12">
                    <div class="my-3">
                        <div class="row">
                            @isset($categories)
                                @foreach ($categories as $category)
                                    <div class="col-12 col-md-4">
                                        <div class="text-center my-4 border">
                                            <button type="submit" class="dropdown-item" name="key" value="{{ $category['id'] }}"
                                                form="searchCategories">
                                                <img src="{{ $category->image }}" class="img-fluid d-block point m-auto pb-3" style="    height: 150px;">
                                                <span class="h4 font-weight-bold">{{ $category['name_'.app()->getLocale()] }}</span>
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
