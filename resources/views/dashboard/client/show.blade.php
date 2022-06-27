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
                            <h4 class="page-title">@lang('dashboard.clients')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.clients')</a></li>
                                <li class="active">@lang('dashboard.viewClient')</li>
                            </ol>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body">
                            <h3 class="m-b-30">{{ $client['first_name'] . ' ' . $client['last_name'] }}</h3>
                            <h5 class="m-b-30">{{ $client['phone'] . ' - ' . $client['email'] }}</h5>
                            @include('dashboard.layouts.messages')
                            <div class="table-responsive">
                                <table class="table table-striped" id="custom_tbl_dt">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align:center;">@lang('dashboard.region')</th>
                                        <th style="text-align:center;">@lang('dashboard.phone')</th>
                                        <th style="text-align:center;">@lang('dashboard.block')</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($client->addresses) > 0)
                                        @foreach($client->addresses as $key => $address)
                                            <tr class="gradeX {{ $address['id'] }}">
                                                <td style="text-align:center;">{{ $key + 1 }}</td>
                                                <td style="text-align:center;">{{ $address->region['name_' . app()->getLocale()] }}</td>
                                                <td style="text-align:center;">{{ $address['phone'] }}</td>
                                                <td style="text-align:center;">{{ $address['block'] }}</td>
                                                <td>
                                                    <a href="{{ route('addresses.show', $address['id']) }}" class="on-default"><i class="fa fa-eye"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('addresses.edit', $address['id']) }}" class="on-default"><i class="fa fa-pencil"></i></a>
                                                </td>
                                                <td class="actions">
                                                    <a data-id="{{ $address['id'] }}" class="deletemsg" id="deleteParent"><i class="fa fa-trash-o"></i></a>
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

@push('custom-scripts')
    <script src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootbox/bootbox.min.js') }}"></script>
    <script>
        $("#itemclients").addClass('active');
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
                            deleteForm.attr('action', "../addresses/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });
    </script>
@endpush


