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
                            <h4 class="page-title">@lang('dashboard.reports')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.reports')</a></li>
                                <li class="active">@lang('dashboard.financialReport')</li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            @include('dashboard.layouts.messages')
                            <form class="row">
                                <div class="col-md-3 form-group">
                                    <label for="from">@lang('dashboard.from')</label>
                                    <input type="date" id="from" name="from" class="form-control"
                                        value="{{ request('from') }}">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label for="to">@lang('dashboard.to')</label>
                                    <input type="date" id="to" name="to" class="form-control"
                                        value="{{ request('to') }}">
                                </div>
                                <div class="col-md-3 form-group" style="padding-top: 26px">
                                    <button class="btn btn-primary">@lang('dashboard.search')</button>
                                </div>
                            </form>
                            @if (count($orders) > 0)
                                <form class="row" action="{{ route('exportData', ['data' => $orders]) }}" method="GET">
                                    @csrf
                                    <div class="col-md-3 form-group" style="padding-top: 26px">
                                        <button class="btn btn-danger">@lang('dashboard.exportExcel')</button>
                                    </div>
                                </form>
                            @endif
                            <h3 class="m-b-10 m-t-40">@lang('dashboard.orders')</h3>
                            <div class="table-responsive">
                                <table class="table table-striped" id="custom_tbl_dt">
                                    <thead>
                                        <tr>
                                            <th>@lang('dashboard.orderNo')</th>
                                            <th style="text-align:center;">@lang('dashboard.client')</th>
                                            <th style="text-align:center;">@lang('dashboard.phone')</th>
                                            <th style="text-align:center;">@lang('dashboard.netTotal')</th>
                                            <th style="text-align:center;">@lang('dashboard.paymentMethod')</th>
                                            <th style="text-align:center;">@lang('dashboard.time')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($orders) > 0)
                                            @foreach ($orders as $key => $order)
                                                <tr class="gradeX {{ $order['id'] }}">
                                                    <td style="text-align:center;">{{ $order['id'] }}</td>
                                                    <td style="text-align:center;">
                                                        {{ $order->client['first_name'] . ' ' . $order->client['last_name'] }}
                                                    </td>
                                                    <td style="text-align:center;">{{ $order->address['phone'] }}</td>
                                                    <td>{{ $order['net_total'] }} BHD</td>
                                                    <td>{{ $order->payment['name_' . app()->getLocale()] }}</td>
                                                    <td>{{ $order['created_at'] }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="9" style="text-align: center!important;">
                                                    @lang('dashboard.noElements')</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" class="deleteForm">
        @csrf
        @method('DELETE')
    </form>

@endsection

@push('custom-css')
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/sweetalert/dist/sweetalert.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/switchery/css/switchery.min.css') }}"
        rel="stylesheet" />
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/ui-alert-dialog-api.js') }}"></script>
    <script>
        $("#itemReport").addClass('active');
    </script>
@endpush
