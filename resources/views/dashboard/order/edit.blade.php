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
                                <li class="active">@lang('dashboard.editOrder')</li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            @include('dashboard.layouts.messages')
                            <button type="button" class="btn btn-primary m-b-10" data-toggle="modal"
                                data-target="#addProduct">
                                @lang('dashboard.addProduct')
                            </button>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th colspan="12">@lang('dashboard.orderDetails')</th>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <th colspan="3">@lang('dashboard.product')</th>
                                        <th colspan="2">@lang('dashboard.size')</th>
                                        <th colspan="2">@lang('dashboard.color')</th>
                                        <th colspan="2">@lang('dashboard.quantity')</th>
                                        <th colspan="2">@lang('dashboard.price')</th>
                                        <th>@lang('dashboard.total')</th>
                                        <th></th>
                                    </tr>
                                    @foreach ($order->orderProducts as $key => $orderProduct)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td colspan="3">{{ $orderProduct->product['name_' . app()->getLocale()] }}
                                            </td>
                                            <td colspan="2">
                                                {{ getSize($orderProduct['size_id'])['name_' . app()->getLocale()] ?? '' }}
                                            </td>
                                            <td colspan="2">
                                                {{ getColor($orderProduct['color_id'])['name_' . app()->getLocale()] ?? '' }}
                                            </td>
                                            <td colspan="2">{{ $orderProduct['quantity'] }}</td>
                                            <td colspan="2">{{ $orderProduct['price'] }} BHD</td>
                                            <td>{{ $orderProduct['total'] }} BHD</td>
                                            <td>
                                                <a data-id="{{ $orderProduct['id'] }}" class="deletemsg"
                                                    id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                            </td>
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
                                        <th colspan="2">@lang('dashboard.apartment')</th>
                                        <th colspan="2">@lang('dashboard.additional_directions')</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $order->client['first_name'] . ' ' . $order->client['last_name'] }}</td>
                                        <td>{{ $order->address['phone'] }}</td>
                                        <td>{{ $order->address->region['name_' . app()->getLocale()] ?? $order->address->city }}
                                        </td>
                                        <td>{{ $order->address['block'] }}</td>
                                        <td>{{ $order->address['road'] }}</td>
                                        <td>{{ $order->address['floor_no'] }}</td>
                                        <td colspan="2">{{ $order->address['apartment'] }}</td>
                                        <td colspan="2">{{ $order->address['additional_directions'] }}</td>
                                    </tr>
                                    <tr>
                                        <th colspan="10">@lang('dashboard.orderInfo')</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">@lang('dashboard.paymentMethod')</th>
                                        <th colspan="2">@lang('dashboard.subTotal')</th>
                                        <th>@lang('dashboard.discount')</th>
                                        <th>@lang('dashboard.VAT')</th>
                                        <th colspan="2">@lang('dashboard.delivery_cost')</th>
                                        <th colspan="2">@lang('dashboard.netTotal')</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">{{ $order->payment['name_' . app()->getLocale()] }}</td>
                                        <td colspan="2">{{ $order['sub_total'] }} BHD</td>
                                        <td>{{ $order['discount'] }} BHD</td>
                                        <td>{{ $order['vat'] }} BHD</td>
                                        <td colspan="2">{{ $order['delivery_charge'] }} BHD</td>
                                        <td colspan="2">{{ $order['net_total'] }} BHD</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal fade" id="addProduct" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('orders.addProduct') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                                            <div class="modal-body">
                                                <div class="form-group col-md-4">
                                                    <label for="category">@lang('dashboard.category')</label>
                                                    <select name="category" class="form-control" id="category">
                                                        <option value="">---</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category['id'] }}">
                                                                {{ $category['name_' . app()->getLocale()] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="product">@lang('dashboard.product')</label>
                                                    <select name="product_id" class="form-control" id="product">
                                                        <option value="">---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="quantity">@lang('dashboard.quantity')</label>
                                                    <input type="number" min="1" class="form-control" name="quantity"
                                                        id="quantity">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">@lang('dashboard.cancel')</button>
                                                <button type="submit"
                                                    class="btn btn-primary">@lang('dashboard.add')</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/css/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/ui-alert-dialog-api.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/js/select2.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $("#itemorders").addClass('active');

        $("select").select2({
            placeholder: "Select",
            width: 'auto',
            allowClear: true
        });

        $('#category').change(function() {
            const id = $(this).val();
            $.get({
                url: "../../categories/" + id + "/products",
                success: function(data) {
                    let options = `<option value="">---</option>`;
                    data.forEach(function(product) {
                        options += `<option value="${product.id}">${product.name}</option>`;
                    });
                    $("#product").empty().append(options);
                },
                error: function(error) {
                    console.log(error);
                }
            });
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
                            deleteForm.attr('action', '../' + id + '/delete-product');
                            deleteForm.submit();
                        }
                    }
                }
            });
        });

    </script>
@endpush
