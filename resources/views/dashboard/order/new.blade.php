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
                            <h4 class="page-title">@lang('dashboard.orders')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.orders')</a></li>
                                <li class="active">@lang('dashboard.newOrders')</li>
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
                                            <th>@lang('dashboard.orderNo')</th>
                                            <th style="text-align:center;">@lang('dashboard.client')</th>
                                            <th style="text-align:center;">@lang('dashboard.phone')</th>
                                            <th style="text-align:center;">@lang('dashboard.details')</th>
                                            <th style="text-align:center;" width="150">@lang('dashboard.status')</th>
                                            <th style="text-align:center;">@lang('dashboard.netTotal')</th>
                                            <th style="text-align:center;">@lang('dashboard.paymentMethod')</th>
                                            <th style="text-align:center;">@lang('dashboard.time')</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($orders) > 0)
                                            @foreach ($orders as $key => $order)
                                                <tr class="gradeX {{ $order['id'] }}">
                                                    <td style="text-align:center;">{{ $order['id'] }}</td>
                                                    <td style="text-align:center;">

                                                        {{ $order->client['first_name'] . ' ' .  $order->client['last_name'] }}
                                                    </td>
                                                    <td style="text-align:center;">{{ $order->address['phone'] ?? '' }}</td>
                                                    <td style="text-align:center;">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#order-{{ $order['id'] }}">@lang('dashboard.orderDetails')</button>
                                                    </td>
                                                    <td style="text-align:center;">
                                                        <select class="form-control changStatus"
                                                            data-id="{{ $order['id'] }}">
                                                            <option value="">---</option>
                                                            <option value="0">@lang('dashboard.approve')</option>
                                                            <option value="8">@lang('dashboard.decline')</option>
                                                        </select>
                                                    </td>
                                                    <td>{{ $order['net_total'] }} BHD</td>
                                                    <td>{{ $order->payment['name_' . lang()] }}</td>
                                                    <td>{{ $order['created_at'] }}</td>
                                                    <td>
                                                        <a href="{{ route('orders.edit', $order['id']) }}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </td>
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

    @foreach ($orders as $key => $order)
        <div class="modal fade" id="order-{{ $order['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">@lang('dashboard.orderNo').{{ $order['id'] }}
                        </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th colspan="10">@lang('dashboard.orderDetails')</th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('dashboard.product')</th>
                                    <th>@lang('dashboard.code')</th>
                                    <th colspan="2">@lang('dashboard.image')</th>
                                    <th>@lang('dashboard.size')</th>
                                    <th>@lang('dashboard.color')</th>
                                    <th>@lang('dashboard.quantity')</th>
                                    <th colspan="2">@lang('dashboard.price')</th>
                                    <th colspan="2">@lang('dashboard.total')</th>
                                </tr>
                                @foreach ($order->orderProducts as $key => $orderProduct)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $orderProduct->product['name_' . lang()] }}</td>
                                        <td>{{ $orderProduct->product['code'] }}</td>
                                        <td colspan="2">
                                            <img src="{{ getProductImage($orderProduct->product['id']) }}" width="100">
                                        </td>
                                        <td>
                                            {{ getSize($orderProduct['size_id'])['name_' . lang()] ?? '' }}
                                        </td>
                                        <td>
                                            {{ getColor($orderProduct['color_id'])['name_' . lang()] ?? '' }}
                                        </td>
                                        <td>{{ $orderProduct['quantity'] }}</td>
                                        <td colspan="2">{{ $orderProduct['price'] }} BHD</td>
                                        <td colspan="2">{{ $orderProduct['total'] }} BHD</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th colspan="10">@lang('dashboard.clientInfo')</th>
                                </tr>
                                <tr>
                                    <th>@lang('dashboard.name')</th>
                                    <th>@lang('dashboard.phone')</th>
                                    <th>@lang('dashboard.region')</th>
                                    <th>@lang('dashboard.block')</th>
                                    <th>@lang('dashboard.road')</th>
                                    <th>@lang('dashboard.floor_no')</th>
                                    <th>@lang('dashboard.apartment')</th>
                                    <th colspan="2">@lang('dashboard.additional_directions')</th>
                                </tr>
                                <tr>
                                    <td>{{ $order->client['first_name'] . ' ' . $order->client['last_name'] }}</td>
                                    <td>{{ $order->address['phone'] ?? ''}}</td>
                                    <td>{{ $order->address['region_id'] }}</td>
                                    <td>{{ $order->address['block'] }}</td>
                                    <td>{{ $order->address['road'] }}</td>
                                    <td>{{ $order->address['floor_no'] }}</td>
                                    <td>{{ $order->address['apartment'] }}</td>
                                    <td colspan="2">{{ $order->address['additional_directions'] }}</td>
                                </tr>
                                <tr>
                                    <th colspan="10">@lang('dashboard.orderInfo')</th>
                                </tr>
                                <tr>
                                    <th colspan="2">@lang('dashboard.paymentMethod')</th>
                                    <th colspan="2">@lang('dashboard.subTotal')</th>
                                    <th>@lang('dashboard.VAT')</th>
                                    <th>@lang('dashboard.discount')</th>
                                    <th>@lang('dashboard.coupons')</th>
                                    <th colspan="2">@lang('dashboard.delivery_cost')</th>
                                    <th colspan="2">@lang('dashboard.netTotal')</th>
                                </tr>
                                <tr>
                                    <td colspan="2">{{ $order->payment['name_' . lang()] }}</td>
                                    <td colspan="2">{{ $order['sub_total'] }} BHD</td>
                                    <td>{{ $order['vat'] }} BHD</td>
                                    <td>{{ $order['discount'] }} BHD</td>
                                    <td>{{ $order['coupon'] }} BHD</td>
                                    <td colspan="2">{{ $order['delivery_charge'] }} BHD</td>
                                    <td colspan="2">{{ $order['net_total'] }} BHD</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <form method="POST" class="deleteForm">
        @csrf
        @method('DELETE')
    </form>

    <form method="POST" action="{{ route('orders.update') }}" class="changStatus">
        @csrf
        @method('PUT')
        <input type="hidden" name="id">
        <input type="hidden" name="status">
    </form>

@endsection

@push('custom-css')
    <link href="{{ asset('assets_' . lang() . '/plugins/sweetalert/dist/sweetalert.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets_' . lang() . '/plugins/select2/css/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets_' . lang() . '/plugins/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('assets_' . lang() . '/plugins/bootbox/ui-alert-dialog-api.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets_' . lang() . '/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $("#itemorders").addClass('active');

        $("select").select2({
            placeholder: "Select",
            width: 'auto',
            allowClear: true
        });

        $('select.changStatus').change(function() {
            const id = $(this).attr('data-id');
            const status = $(this).val();
            $('form.changStatus input[name="id"]').val(id);
            $('form.changStatus input[name="status"]').val(status);
            $('form.changStatus').submit();
        });

        let body = $('body');

        body.on('click', '.deletemsg', function() {
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
                        callback: function() {
                            let deleteForm = $(".deleteForm");
                            deleteForm.attr('action', "orders/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });
    </script>
@endpush
