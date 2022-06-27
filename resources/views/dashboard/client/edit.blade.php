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
                                <li class="active">@lang('dashboard.editClient')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('clients.update', $client['id']) }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-6">
                                        <label for="first_name">@lang('dashboard.first_name')</label>
                                        <input id="first_name" type="text" name="first_name" required placeholder="@lang('dashboard.first_name')" class="form-control" value="{{ $client['first_name'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">@lang('dashboard.last_name')</label>
                                        <input id="last_name" type="text" name="last_name" required placeholder="@lang('dashboard.last_name')" class="form-control" value="{{ $client['last_name'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">@lang('dashboard.phone')</label>
                                        <input id="phone" type="text" name="phone" required placeholder="@lang('dashboard.phone')" class="form-control" value="{{ $client['phone'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">@lang('dashboard.email')</label>
                                        <input id="email" type="email" name="email" required placeholder="@lang('dashboard.email')" class="form-control" value="{{ $client['email'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">@lang('dashboard.password')</label>
                                        <input id="password" type="password" name="password" required placeholder="@lang('dashboard.password')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option {{ $client['display'] == 0 ? 'selected' : '' }} value="0">@lang('dashboard.hidden')</option>
                                            <option {{ $client['display'] == 1 ? 'selected' : '' }} value="1">@lang('dashboard.visible')</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">@lang('dashboard.edit')</button>
                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">@lang('dashboard.cancel')</button>
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
    <script>
        $("#itemclients").addClass('active');
    </script>
@endpush


