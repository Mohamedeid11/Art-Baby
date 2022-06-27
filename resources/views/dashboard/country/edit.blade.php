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
                            <h4 class="page-title">@lang('dashboard.countries')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.countries')</a></li>
                                <li class="active">@lang('dashboard.editCountry')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('countries.update', $country['id']) }}"
                                    enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-4">
                                        <label for="name_ar">@lang('dashboard.name_ar')</label>
                                        <input id="name_ar" type="text" name="name_ar" required
                                            placeholder="@lang('dashboard.name_ar')" class="form-control"
                                            value="{{ $country['name_ar'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="name_en">@lang('dashboard.name_en')</label>
                                        <input id="name_en" type="text" name="name_en" required
                                            placeholder="@lang('dashboard.name_en')" class="form-control"
                                            value="{{ $country['name_en'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="delivery_cost">@lang('dashboard.delivery_cost')</label>
                                        <input id="delivery_cost" type="number" step=".001" name="delivery_cost" required
                                            placeholder="@lang('dashboard.delivery_cost')" class="form-control"
                                            value="{{ $country['delivery_cost'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="min_order">@lang('dashboard.min_order')</label>
                                        <input id="min_order" type="number" step=".001" name="min_order" required
                                            placeholder="@lang('dashboard.min_order')" class="form-control"
                                            value="{{ $country['min_order'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option {{ $country['display'] == 0 ? 'selected' : '' }} value="0">
                                                @lang('dashboard.hidden')</option>
                                            <option {{ $country['display'] == 1 ? 'selected' : '' }} value="1">
                                                @lang('dashboard.visible')</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit"
                                            name="submit">@lang('dashboard.edit')</button>
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
        src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}">
    </script>

    <script>
        $("#itemcountries").addClass('active');

    </script>
@endpush
