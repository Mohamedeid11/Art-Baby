@extends('agent.layout')
@section('content')

    <div class="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">@lang('dashboard.products')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.products')</a></li>
                                <li class="active">@lang('dashboard.viewProduct')</li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <h3 class="m-b-30">
                                {{ $product['name_' . app()->getLocale()] }}
                                ({{ $product->category['name_' . app()->getLocale()] }} - {{ $product->price }} BHD)
                            </h3>
                            @include('dashboard.layouts.messages')
                            <div class="table-responsive">
                                <table class="table table-striped" id="custom_tbl_dt">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align:center;">@lang('dashboard.client')</th>
                                        <th style="text-align:center;">@lang('dashboard.rate')</th>
                                        <th style="text-align:center;">@lang('dashboard.review')</th>
                                        <th style="text-align:center;">@lang('dashboard.time')</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($product->images) > 0)
                                        @foreach($product->reviews as $key => $review)
                                            <tr class="gradeX {{ $review['id'] }}">
                                                <td style="text-align:center;">{{ $key + 1 }}</td>
                                                <td style="text-align:center;">{{ $review->client['first_name'] . ' ' . $review->client['last_name'] }}</td>
                                                <td style="text-align:center;">{{ $review['rate'] }}</td>
                                                <td style="text-align:center;">{{ $review['review'] }}</td>
                                                <td style="text-align:center;">{{ $review['created_at'] }}</td>
                                                <td class="actions">
                                                    <a data-id="{{ $review['id'] }}" class="deletemsg" id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" style="text-align: center!important;">@lang('dashboard.noElements')</td>
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

@push('custom-scripts')
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/bootbox.min.js') }}"></script>
    <script>
        $("#itemProducts").addClass('active');
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
                            deleteForm.attr('action', "comments/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });
    </script>
@endpush


