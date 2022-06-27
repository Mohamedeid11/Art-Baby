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
                            <h4 class="page-title">@lang('dashboard.weights')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.weights')</a></li>
                                <li class="active">@lang('dashboard.editWeight')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('weights.update', $weight['id']) }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-4">
                                        <label for="weight">@lang('dashboard.weight')</label>
                                        <input id="weight" type="text" name="weight" required placeholder="@lang('dashboard.weight')" class="form-control" value="{{ $weight['weight'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="price">@lang('dashboard.price')</label>
                                        <input id="price" type="text" name="price" required placeholder="@lang('dashboard.price')" class="form-control" value="{{ $weight['price'] }}">
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
    <script type="text/javascript" src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>

    <script>
        $("#itemWeight").addClass('active');
    </script>
@endpush


