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
                                <li class="active">@lang('dashboard.viewAll')</li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            @include('dashboard.layouts.messages')
                            <div class="table-responsive">
                                <table class="table table-striped" id="custom_tbl_dt">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align:center;">@lang('dashboard.code')</th>
                                        <th style="text-align:center;">@lang('dashboard.type')</th>
                                        <th style="text-align:center;">@lang('dashboard.discount')</th>
                                        <th style="text-align:center;">@lang('dashboard.percent_off')</th>
                                        <th style="text-align:center;">@lang('dashboard.from')</th>
                                        <th style="text-align:center;">@lang('dashboard.to')</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($coupons) > 0)
                                        @foreach($coupons as $key => $coupon)
                                        <tr class="gradeX {{ $coupon['id'] }}">
                                            <td style="text-align:center;">{{ $key + 1 }}</td>
                                            <td style="text-align:center;">{{ $coupon['code'] }}</td>
                                            <td style="text-align:center;">{{ __('dashboard.'. $coupon['type']) }}</td>
                                            <td style="text-align:center;">{{ $coupon['discount'] ? $coupon['discount'] .' BHD' : ''}} </td>
                                            <td style="text-align:center;">{{ $coupon['percent_off'] ? $coupon['percent_off'] .' %' : ''}} </td>
                                            <td style="text-align:center;">{{ $coupon['from'] }}</td>
                                            <td style="text-align:center;">{{ $coupon['to'] }}</td>
                                            <td>
                                                <a href="{{ route('couponecode.edit', $coupon['id']) }}" class="on-default"><i class="fa fa-pencil"></i></a>
                                            </td>
                                            <td class="actions">
                                                    <a data-id="{{ $coupon['id'] }}" class="deletemsg" id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" style="text-align: center!important;">@lang('dashboard.noElements')</td>
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
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/sweetalert/dist/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/ui-alert-dialog-api.js') }}"></script>
    <script>
        $("#itemCoupon").addClass('active');
        let body = $('body');

        body.on('click', '.deletemsg', function () {
            const id = $(this).attr('data-id');

            bootbox.dialog({
                message: "@lang('dashboard.askDelete')",
                title: "@lang('dashboard.deleteMessage')",
                buttons: {
                    danger: {
                        label: "@lang('dashboard.cancel')",
                        className: "btn-danger"
                    },
                    main: {
                        label: "@lang('dashboard.delete')",
                        className: "btn-primary",
                        callback: function () {
                            let deleteForm = $(".deleteForm");
                            deleteForm.attr('action', "couponecode/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });
    </script>
@endpush


