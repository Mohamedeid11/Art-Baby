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
                            <h4 class="page-title">@lang('dashboard.other')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.other')</a></li>
                                <li class="active">@lang('dashboard.websiteMessages')</li>
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
                                        <th style="text-align:center;">@lang('dashboard.name')</th>
                                        <th style="text-align:center;">@lang('dashboard.phone')</th>
                                        <th style="text-align:center;">@lang('dashboard.email')</th>
                                        <th style="text-align:center;">@lang('dashboard.subject')</th>
                                        <th colspan="2" style="text-align:center;">@lang('dashboard.message')</th>
                                        <th style="text-align:center;">@lang('dashboard.time')</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($messages) > 0)
                                        @foreach($messages as $key => $message)
                                        <tr class="gradeX {{ $message['id'] }}">
                                            <td style="text-align:center;">{{ $key + 1 }}</td>
                                            <td style="text-align:center;">{{ $message['name'] }}</td>
                                            <td style="text-align:center;">{{ $message['phone'] }}</td>
                                            <td style="text-align:center;">{{ $message['email'] }}</td>
                                            <td style="text-align:center;">{{ $message['subject'] }}</td>
                                            <td style="text-align:center;">{{ $message['message'] }}</td>
                                            <td colspan="2" style="text-align:center;">{{ $message['created_at'] }}</td>
                                            <td class="actions">
                                                <a data-id="{{ $message['id'] }}" class="deletemsg" id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" style="text-align: center!important;">@lang('dashboard.noElements')</td>
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
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/bootbox.min.js') }}"></script>
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/ui-alert-dialog-api.js') }}"></script>
    <script>
        $("#itemOther").addClass('active');
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
                            deleteForm.attr('action', "messages/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });
    </script>
@endpush


