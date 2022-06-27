@extends('website.layout')
@section('content')

    @include('website.home.main_slider')
    @include('website.home.categories')
    @include('website.home.featured_products')
    @include('website.home.popular_products')
    @include('website.home.recent_products')
    @include('website.home.follow')

@endsection
