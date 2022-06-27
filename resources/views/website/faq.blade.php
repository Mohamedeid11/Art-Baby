@extends('website.layout')
@section('content')
<!--start Breadcrumb-->

<div class="bread py-5 bg-light text-center">
    <div class="container">
        <h3 class="main_bold">@lang('website.faq')</h3>
        <nav aria-label="CART">
            <ol class="breadcrumb bg-transparent d-flex justify-content-center h6 main_bold">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark main_bold  text-decoration-none">@lang('website.home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('website.faq')</li>
            </ol>
        </nav>
    </div>
</div>


<!--start about us-->
@if (count($faqs) > 0)
<div class="about py-4">
    <div class="container">
        @if (App::isLocale('en'))
        @foreach ($faqs as $faq)
        <div class="row align-items-center my-4">
            <div class="col-12 col-md-5">
                <div class="">
                    <img src="{{ asset($faq['image'] ) }}" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="">
                    <div class="position-relative">
                        <h2 class="main_bold">@lang('website.faq')</h2>
                    </div>
                    <div class="pt-5">
                        <p>Q: {{ $faq['question_en'] }}</p>
                        <p>A: {{ $faq['answer_en'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        @if (App::isLocale('ar'))
        @foreach ($faqs as $faq)
        <div class="row align-items-center my-4">
            <div class="col-12 col-md-7">
                <div class="">
                    <div class="position-relative">
                        <h2 class="main_bold">@lang('website.faq')</h2>
                    </div>
                    <div class="pt-5">
                        <p>س: {{ $faq->question_ar }} </p>
                        <p>ج: {{ $faq->answer_ar }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="">
                    <img src="{{ asset($faq['image'] ) }}" class="img-fluid">
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endif
@endsection
