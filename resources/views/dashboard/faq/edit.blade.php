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
                            <h4 class="page-title">@lang('dashboard.faq')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.faq')</a></li>
                                <li class="active">@lang('dashboard.editFAQ')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('faq.update', $faq['id']) }}" enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-6">
                                        <label for="question_ar">@lang('dashboard.question_ar')</label>
                                        <input id="question_ar" type="text" name="question_ar" required placeholder="@lang('dashboard.question_ar')" class="form-control" value="{{ $faq['question_ar'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="question_en">@lang('dashboard.question_en')</label>
                                        <input id="question_en" type="text" name="question_en" required placeholder="@lang('dashboard.question_en')" class="form-control" value="{{ $faq['question_en'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="answer_ar">@lang('dashboard.answer_ar')</label>
                                        <textarea id="answer_ar" name="answer_ar" required placeholder="@lang('dashboard.answer_ar')" class="form-control">{{ $faq['answer_ar'] }}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="answer_en">@lang('dashboard.answer_en')</label>
                                        <textarea id="answer_en" name="answer_en" required placeholder="@lang('dashboard.answer_en')" class="form-control">{{ $faq['answer_en'] }}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option {{ $faq['display'] == 0 ? 'selected' : '' }} value="0">@lang('dashboard.hidden')</option>
                                            <option {{ $faq['display'] == 1 ? 'selected' : '' }} value="1">@lang('dashboard.visible')</option>
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
        $("#itemfaq").addClass('active');
    </script>
@endpush


