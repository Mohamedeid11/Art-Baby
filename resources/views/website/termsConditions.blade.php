@extends('website.layout')
@section('content')
    <!--start Breadcrumb-->


<div class="bread py-5 bg-light text-center">
    <div class="container">
        <h3 class="main_bold">@lang('website.terms')</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent d-flex justify-content-center h5 main_bold">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark text-decoration-none">@lang('website.home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('website.terms')</li>
            </ol>
        </nav>
    </div>
</div>




<!--start terms us-->

<div class="terms py-4">
    <div class="container">
        <div class="row align-items-center my-4">
            <div class="col-12 col-md-5">
                <div class="">
                    <img src=" {{ asset ($terms[4]->value ) }}" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="">
                    <div class="position-relative">
                        <h2 class="main_bold">{{ App::isLocale('en') ? $terms[3]->value : $terms[2]->value }}</h2>
                    </div>
                    <div class="pt-5">
                        <p>{!!  App::isLocale('en') ? $terms[1]->value : $terms[0]->value  !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
