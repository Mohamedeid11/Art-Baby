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
                                            <th style="text-align:center;">@lang('dashboard.name')</th>
                                            <th style="text-align:center;">@lang('dashboard.name_en')</th>
                                            <th style="text-align:center;">@lang('dashboard.email')</th>
                                            <th style="text-align:center;">@lang('dashboard.phone')</th>
                                            <th style="text-align:center;">@lang('dashboard.image')</th>
                                            <th style="text-align:center;">@lang('dashboard.visibility')</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($agents) > 0)
                                            @foreach ($agents as $key => $agent)
                                                <tr class="gradeX {{ $agent['id'] }}">
                                                    <td style="text-align:center;">{{ $key + 1 }}</td>
                                                    <td style="text-align:center;">{{ $agent['name'] }}</td>
                                                    <td style="text-align:center;">{{ $agent['name_en'] }}</td>
                                                    <td style="text-align:center;">{{ $agent['email'] }}</td>
                                                    <td style="text-align:center;">{{ $agent['phone'] }}</td>
                                                    <td style="text-align:center;">
                                                        <img src="{{ $agent['image'] }}" alt="{{ $agent['name'] }}"
                                                            width="150">
                                                    </td>
                                                    <td style="text-align:center;">
                                                        @if ($agent['display'] == 1)
                                                            <input class="off cm-toggle" data-id="{{ $agent['id'] }}"
                                                                type="checkbox" id="toggle"checked data-plugin="switchery"
                                                                data-color="#81c868" />
                                                        @else
                                                            <input class="on cm-toggle" data-id="{{ $agent['id'] }}" type="checkbox" id="toggle"
                                                                data-plugin="switchery" data-color="#81c868" />
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('agents.show', $agent['id']) }}"
                                                            class="on-default"><i class="fa fa-eye"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('agents.edit', $agent['id']) }}"
                                                            class="on-default"><i class="fa fa-pencil"></i></a>
                                                    </td>
                                                    <td class="actions">
                                                        <a data-id="{{ $agent['id'] }}" class="deletemsg"
                                                            id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" style="text-align: center!important;">
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
        $("#itemagents").addClass('active');
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
                            deleteForm.attr('action', "agents/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });

        body.on('change', '.off', function() {
            const id = $(this).attr('data-id');
            swal({
                title: "@lang('dashboard.hideAgent')",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "@lang('dashboard.yes')",
                cancelButtonText: "@lang('dashboard.cancel')",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm) {
                if (isConfirm) {
                    swal("@lang('dashboard.hiddenAgent')", "", "success");
                    $.ajax({
                        type: "POST",
                        url: "{{ route('agents.switch') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id,
                            display: 0
                        },
                        dataType: 'text',
                        cache: false,
                        success: function() {
                            $(".off[data-id=" + id + "]").toggleClass('on off');
                        }
                    });
                }
            });
        });

        body.on('change', '.on', function() {
            const id = $(this).attr('data-id');
            swal({
                title: "@lang('dashboard.showAgent')",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "@lang('dashboard.yes')",
                cancelButtonText: "@lang('dashboard.cancel')",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm) {
                if (isConfirm) {
                    swal("@lang('dashboard.showedAgent')", "", "success");
                    $.ajax({
                        type: "POST",
                        url: "{{ route('agents.switch') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id,
                            display: 1
                        },
                        dataType: 'text',
                        cache: false,
                        success: function() {
                            $(".on[data-id=" + id + "]").toggleClass('on off');
                        }
                    });
                }
            });
        });

    </script>
@endpush
