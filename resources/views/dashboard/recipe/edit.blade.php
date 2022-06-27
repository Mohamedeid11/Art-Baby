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
                            <h4 class="page-title">@lang('dashboard.recipes')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.recipes')</a></li>
                                <li class="active">@lang('dashboard.editRecipe')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('recipes.update', $recipe['id']) }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-6">
                                        <label for="title_ar">@lang('dashboard.title_ar')</label>
                                        <input id="title_ar" type="text" name="title_ar" required placeholder="@lang('dashboard.title_ar')" class="form-control" value="{{ $recipe['title_ar'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title_en">@lang('dashboard.title_en')</label>
                                        <input id="title_en" type="text" name="title_en" required placeholder="@lang('dashboard.title_en')" class="form-control" value="{{ $recipe['title_en'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="link">@lang('dashboard.link')</label>
                                        <input id="link" type="url" name="link" required placeholder="@lang('dashboard.link')" class="form-control" value="{{ $recipe['link'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option {{ $recipe['display'] == 0 ? 'selected' : '' }} value="0">@lang('dashboard.hidden')</option>
                                            <option {{ $recipe['display'] == 1 ? 'selected' : '' }} value="1">@lang('dashboard.visible')</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group">
                                        <label for="userName">@lang('dashboard.image')</label>
                                        @lang('dashboard.edit?')
                                        <img src="{{ $recipe['image'] }}" width="150" height="100" />

                                        <input type="file" name="image" id="image" class="filestyle"  data-buttonname="btn-primary">
                                    </div>
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
        $("#itemProducts").addClass('active');
    </script>
@endpush


