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
                            <h4 class="page-title">@lang('dashboard.transport')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.transport')</a></li>
                                <li class="active">@lang('dashboard.transport')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('transport.stepOne') }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    <input type="hidden" name="order_id" required value="{{ $order['id'] }}">
                                    @csrf
                                    <h3>@lang('dashboard.orderInfo')</h3>
                                    <div class="form-group col-md-6">
                                        <label for="delivery_type">@lang('dashboard.delivery_type')</label>
                                        <select class="form-control  select2me" required id="delivery_type" name="delivery_type">
                                            <option value="0">Sameday</option>
                                            <option value="1">Nextday</option>
                                            <option value="2">Express-normal</option>
                                            <option value="3">Express-night</option>
                                            <option value="4">International </option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-6">
                                        <label for="total_weight">@lang('dashboard.total_weight')</label>
                                        <input id="total_weight" type="number" step="0.001" name="total_weight" required placeholder="@lang('dashboard.total_weight')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="boxcount">@lang('dashboard.boxcount')</label>
                                        <input id="boxcount" type="number" step="1" name="boxcount" required placeholder="@lang('dashboard.boxcount')" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_pickupdate">@lang('dashboard.user_selected_pickupdate')</label>
                                        <input id="user_selected_pickupdate" type="date" name="user_selected_pickupdate" required placeholder="@lang('dashboard.user_selected_pickupdate')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_pickup_time">@lang('dashboard.user_selected_pickup_time')</label>
                                        <input id="user_selected_pickup_time" type="time" name="user_selected_pickup_time" required placeholder="@lang('dashboard.user_selected_pickup_time')" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_delivery_date">@lang('dashboard.user_selected_delivery_date')</label>
                                        <input id="user_selected_delivery_date" type="date" name="user_selected_delivery_date" required placeholder="@lang('dashboard.user_selected_delivery_date')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_selected_delivery_time">@lang('dashboard.user_selected_delivery_time')</label>
                                        <input id="user_selected_delivery_time" type="time" name="user_selected_delivery_time" required placeholder="@lang('dashboard.user_selected_delivery_time')" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">@lang('dashboard.next')</button>
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
        $("#itemOrder").addClass('active');
    </script>
@endpush


