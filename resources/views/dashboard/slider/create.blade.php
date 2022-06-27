@extends('dashboard.layout')
@push('custom-css')
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/css/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush
@section('content')

    <div class="wrapper">
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">@lang('dashboard.sliders')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.sliders')</a></li>
                                <li class="active">@lang('dashboard.addImage')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data"
                                    data-parsley-validate novalidate>
                                    @csrf
                                    {{-- <div class="form-group col-md-6">
                                        <label for="category">@lang('dashboard.category')</label>
                                        <select id="category" required class="form-control">
                                            <option value="" disabled selected>---</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}">
                                                    {{ $category['name_' . app()->getLocale()] }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    {{-- <div class="form-group col-md-6">
                                        <label for="product">@lang('dashboard.product')</label>
                                        <select id="product" name="product" required class="form-control">
                                            <option value="" disabled selected>---</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-group col-md-6">
                                        <label for="title">@lang('dashboard.title')</label>
                                        <input id="title" type="text" name="title" placeholder="@lang('dashboard.title')"
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="type">@lang('dashboard.type')</label>
                                        <select class="form-control  select2me" required id="type" name="type">
                                            <option value="1">@lang('dashboard.sliders')</option>
                                            <option value="2">@lang('dashboard.featured')</option>
                                            <option value="3">@lang('dashboard.recent')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="image">@lang('dashboard.image')</label>
                                        <input type="file" name="image" id="image" class="filestyle" required
                                            data-buttonname="btn-primary">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option value="0">@lang('dashboard.hidden')</option>
                                            <option value="1">@lang('dashboard.visible')</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light"
                                            type="submit">@lang('dashboard.add')</button>
                                        <button type="reset"
                                            class="btn btn-default waves-effect waves-light m-l-5">@lang('dashboard.cancel')</button>
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
    <script type="text/javascript"
        src="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/js/select2.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}">
    </script>

    <script>
        $("#itemsliders").addClass('active');
        $("select").select2({
            placeholder: "Select",
            width: 'auto',
            allowClear: true
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                var Cid = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('categories.products') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: Cid,
                    },
                    dataType: 'json',
                    cache: false,
                    success: function(data) {
                        var sel = $("#product");
                        sel.empty();
                        for (var i = 0; i < data.length; i++) {
                            sel.append('<option value="' + data[i].id + '">' + data[i].name +
                                '</option>');
                        }
                    }
                });
            });
        });

    </script>
@endpush
