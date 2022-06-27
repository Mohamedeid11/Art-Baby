@extends('dashboard.layout')
@section('content')

    <div class="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">@lang('dashboard.coupons')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.coupons')</a></li>
                                <li class="active">@lang('dashboard.editCoupon')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('couponecode.update', $coupon['id']) }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-6">
                                        <label for="code">@lang('dashboard.code')</label>
                                        <input value="{{  $coupon['code'] }}" id="code" type="text" name="code" required placeholder="@lang('dashboard.name_ar')" class="form-control" value="{{ $coupon['code'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="type">@lang('dashboard.type')</label>
                                        <select id="type" name="type" class="form-control">
                                            <option selected disabled hidden value="">---</option>
                                            <option @if( $coupon['type'] == 'discount') selected @endif value="discount">@lang('dashboard.discount')</option>
                                            <option @if( $coupon['type'] == 'percent_off') selected @endif value="percent_off">@lang('dashboard.percent_off')</option>
                                        </select>
                                    </div>


                                    <div id="discount" class="form-group col-md-6" style="display: none;">
                                        <label for="discount">@lang('dashboard.discount')</label>
                                        <input value="{{  $coupon['discount'] }}" type="text" name="discount" placeholder="@lang('dashboard.discount')"
                                            class="form-control">
                                    </div>
                                    <div id="percent_off" class="form-group col-md-6" style="display: none;">
                                        <label for="percent_off">@lang('dashboard.percent_off')</label>
                                        <input value="{{  $coupon['percent_off'] }}" type="text" name="percent_off" placeholder="@lang('dashboard.percent_off')"
                                            class="form-control">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="from">@lang('dashboard.from')</label>
                                        <input value="{{  $coupon['from'] }}" id="from" type="text" name="from" required placeholder="@lang('dashboard.from')" class="form-control" value="{{ $coupon['from'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="to">@lang('dashboard.to')</label>
                                        <input value="{{  $coupon['to'] }}" id="to" type="text" name="to" required placeholder="@lang('dashboard.to')" class="form-control" value="{{ $coupon['to'] }}">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">@lang('dashboard.edit')</button>
                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">@lang('dashboard.cancel')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('custom-scripts')
    <script type="text/javascript" src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>

    <script>
        $("#itemCurrency").addClass('active');
    </script>

    <script>
        $("#itemCoupon").addClass('active');

        $("#type").change(function() {
            $(this).val() == 'percent_off' ? $('#percent_off').show() : $('#percent_off').hide()  ;
            $(this).val() == 'discount' ? $('#discount').show() : $('#discount').hide()  ;
        });
    </script>
@endpush


