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
                            <h4 class="page-title">@lang('dashboard.agents')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.agents')</a></li>
                                <li class="active">@lang('dashboard.viewAgent')</li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <h3 class="m-b-30">{{ $agent['name'] }} - {{ $agent['email'] }}</h3>
                            @include('dashboard.layouts.messages')
                            <div class="table-responsive">
                                <table class="table table-striped" id="custom_tbl_dt">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align:center;">@lang('dashboard.name_ar')</th>
                                        <th style="text-align:center;">@lang('dashboard.name_en')</th>
                                        <th style="text-align:center;">@lang('dashboard.price')</th>
                                        <th style="text-align:center;">@lang('dashboard.image')</th>
                                        <th style="text-align:center;">@lang('dashboard.visibility')</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($agent->products) > 0)
                                        @foreach($agent->products as $key => $product)
                                            <tr class="gradeX {{ $product['id'] }}">
                                                <td style="text-align:center;">{{ $key + 1 }}</td>
                                                <td style="text-align:center;">{{ $product['name_ar'] }}</td>
                                                <td style="text-align:center;">{{ $product['name_en'] }}</td>
                                                <td style="text-align:center;">{{ $product['price'] }}</td>
                                                <td style="text-align:center;">
                                                    <img src="{{ $product['images'][0]['image'] }}" alt="{{ $product['name_en'] }}" width="150">
                                                </td>
                                                <td style="text-align:center;">
                                                    @if ($product['display'] == 1)
                                                        <input class="off cm-toggle" data-id="{{ $product['id'] }}" type="checkbox" id="toggle"checked data-plugin="switchery" data-color="#81c868"/>
                                                    @else
                                                        <input class="on cm-toggle" data-id="{{ $product['id'] }}" type="checkbox" id="toggle"data-plugin="switchery" data-color="#81c868"/>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="" class="on-default"><i class="fa fa-eye"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('products.edit', $product['id']) }}" class="on-default"><i class="fa fa-pencil"></i></a>
                                                </td>
                                                <td class="actions">
                                                    <a data-id="{{ $product['id'] }}" class="deletemsg" id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9" style="text-align: center!important;">@lang('dashboard.noElements')</td>
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
        $("#itemCategory").addClass('active');
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
                            deleteForm.attr('action', "../products/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });

        body.on('change', '.off', function () {
            const id = $(this).attr('data-id');
            swal({
                title: "@lang('dashboard.hideProduct')",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "@lang('dashboard.yes')",
                cancelButtonText: "@lang('dashboard.cancel')",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {
                if (isConfirm) {
                    swal("@lang('dashboard.hiddenProduct')", "", "success");
                    $.ajax({
                        type: "POST",
                        url: "{{ route('products.switch') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id,
                            display: 0
                        },
                        dataType: 'text',
                        cache: false,
                        success: function () {
                            $(".off[data-id=" + id + "]").toggleClass('on off');
                        }
                    });
                }
            });
        });

        body.on('change', '.on', function () {
            const id = $(this).attr('data-id');
            swal({
                title: "@lang('dashboard.showProduct')",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "@lang('dashboard.yes')",
                cancelButtonText: "@lang('dashboard.cancel')",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function (isConfirm) {
                if (isConfirm) {
                    swal("@lang('dashboard.showedProduct')", "", "success");
                    $.ajax({
                        type: "POST",
                        url: "{{ route('products.switch') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id,
                            display: 1
                        },
                        dataType: 'text',
                        cache: false,
                        success: function () {
                            $(".on[data-id=" + id + "]").toggleClass('on off');
                        }
                    });
                }
            });
        });
    </script>
@endpush


