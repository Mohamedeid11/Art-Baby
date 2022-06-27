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
                                <li class="active">@lang('dashboard.editAgent')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('agents.update', $agent['id']) }}"
                                    data-parsley-validate novalidate enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-6">
                                        <label for="name">@lang('dashboard.name')</label>
                                        <input id="name" type="text" name="name" required
                                            placeholder="@lang('dashboard.name')" class="form-control"
                                            value="{{ $agent['name'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name_en">@lang('dashboard.name_en')</label>
                                        <input id="name_en" type="text" name="name_en" required
                                               placeholder="@lang('dashboard.name_en')" class="form-control" value="{{ $agent['name_en'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">@lang('dashboard.email')</label>
                                        <input id="email" type="email" name="email" required placeholder="@lang('dashboard.email')" class="form-control" value="{{ $agent['email'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">@lang('dashboard.password')</label>
                                        <input id="password" type="password" name="password" required placeholder="@lang('dashboard.password')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">@lang('dashboard.phone')</label>
                                        <input id="phone" type="text" name="phone" required
                                            placeholder="@lang('dashboard.phone')" class="form-control"
                                            value="{{ $agent['phone'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option {{ $agent['display'] == 0 ? 'selected' : '' }} value="0">
                                                @lang('dashboard.hidden')</option>
                                            <option {{ $agent['display'] == 1 ? 'selected' : '' }} value="1">
                                                @lang('dashboard.visible')</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group">
                                        <label for="userName">@lang('dashboard.image')</label>
                                        @lang('dashboard.edit?')
                                        <img src="{{ $agent['image'] }}" width="150" height="100" />

                                        <input type="file" name="image" id="image" class="filestyle"
                                            data-buttonname="btn-primary">
                                    </div>
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
        $("#itemagents").addClass('active');

    </script>
@endpush
