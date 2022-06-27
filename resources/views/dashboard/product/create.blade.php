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
                            <h4 class="page-title">@lang('dashboard.products')</h4>
                            <ol class="breadcrumb">
                                <li><a href="">@lang('dashboard.products')</a></li>
                                <li class="active">@lang('dashboard.addProduct')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data"
                                    data-parsley-validate novalidate>
                                    @csrf
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="category">@lang('dashboard.category')</label>
                                        <select id="category" name="category" required class="form-control">
                                            <option value="">---</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}">
                                                    {{ $category['name_' . app()->getLocale()] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="price">@lang('dashboard.price')</label>
                                            <input id="price" type="text" name="price" required
                                                placeholder="@lang('dashboard.price')" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="name_ar">@lang('dashboard.name_ar')</label>
                                        <input id="name_ar" type="text" name="name_ar" required
                                            placeholder="@lang('dashboard.name_ar')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="name_en">@lang('dashboard.name_en')</label>
                                        <input id="name_en" type="text" name="name_en" required
                                            placeholder="@lang('dashboard.name_en')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="desc_ar">@lang('dashboard.desc_ar')</label>
                                        <textarea id="desc_ar" name="desc_ar" required
                                            placeholder="@lang('dashboard.desc_ar')" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="desc_en">@lang('dashboard.desc_en')</label>
                                        <textarea id="desc_en" name="desc_en" required
                                            placeholder="@lang('dashboard.desc_en')" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-12">
                                                <label for="size">@lang('dashboard.size')</label>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12">
                                                <label id="quantitytitle" style="display: none" for="quantity">@lang('dashboard.quantity')</label>
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                        @foreach ($sizes as $size)

                                            <div class="row" class="@if ($loop->index % 2 == 0) text-white @endif"
                                                style="padding-top: 10px; @if ($loop->index % 2 == 0)  background: #CCC @endif">
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input class="form-check-input checker"  name="size[]" type="checkbox"
                                                        id="{{ $size['id'] }}" value="{{ $size['id'] }}">
                                                    <label class="form-check-label"for="flexCheckDefault">
                                                        {{ $size['name_' . app()->getLocale()] }}
                                                    </label>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <input disabled style="display: none" id="quantity-{{ $size['id'] }}" type="number"
                                                        name="quantity[]" placeholder="@lang('dashboard.quantity')"
                                                        class="form-control ">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>



                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="color">@lang('dashboard.color')</label>
                                        <select id="color" name="color[]" required class="form-control" multiple>
                                            <option value="">---</option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color['id'] }}">
                                                    {{ $color['name_' . app()->getLocale()] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="weight">@lang('dashboard.weight')</label>
                                        <select id="weight" name="weight" required class="form-control">
                                            <option value="">---</option>
                                            @foreach ($weights as $weight)
                                                <option value="{{ $weight['id'] }}">
                                                    W : {{ $weight['weight'] }} - P : {{ $weight['price'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="code">@lang('dashboard.code')</label>
                                        <input id="code" type="text" name="code" required
                                            placeholder="@lang('dashboard.code')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="cost">@lang('dashboard.cost')</label>
                                        <input id="cost" type="text" name="cost" required
                                            placeholder="@lang('dashboard.cost')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="discountType">@lang('dashboard.isThereDiscount')</label>
                                        <select id="discountType" name="discountType" required class="form-control">
                                            <option value="0">@lang('dashboard.no')</option>
                                            <option value="1">@lang('dashboard.yes')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 discount hide">
                                        <label for="discount">@lang('dashboard.discount')</label>
                                        <input id="discount" type="text" name="discount"
                                            placeholder="@lang('dashboard.discount')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 discount hide">
                                        <label for="discount_from">@lang('dashboard.discount_from')</label>
                                        <input id="discount_from" type="date" name="discount_from"
                                            placeholder="@lang('dashboard.discount_from')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 discount hide">
                                        <label for="discount_to">@lang('dashboard.discount_to')</label>
                                        <input id="discount_to" type="date" name="discount_to"
                                            placeholder="@lang('dashboard.discount_to')" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="images">@lang('dashboard.images')</label>
                                        <input type="file" name="images[]" id="images" class="filestyle" required
                                            multiple data-buttonname="btn-primary">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option value="0">@lang('dashboard.hidden')</option>
                                            <option value="1">@lang('dashboard.visible')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="deliverable">@lang('dashboard.deliverable')</label>
                                        <select class="form-control  select2me" required id="deliverable"
                                            name="deliverable">
                                            <option value="0">@lang('dashboard.no')</option>
                                            <option value="1">@lang('dashboard.yes')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="featured">@lang('dashboard.featured')</label>
                                        <select class="form-control  select2me" required id="featured" name="featured">
                                            <option value="0">@lang('dashboard.no')</option>
                                            <option value="1">@lang('dashboard.yes')</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit"
                                            name="submit">@lang('dashboard.add')</button>
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

@push('custom-css')
    <link href="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/css/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush
@push('custom-scripts')
    <script type="text/javascript"
        src="{{ asset('assets_' . app()->getLocale() . '/plugins/select2/js/select2.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets_' . app()->getLocale() . '/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}">
    </script>

    <script>
        $("#itemproducts").addClass('active');

        $("select").select2({
            placeholder: "Select",
            width: 'auto',
            allowClear: true
        });

        $("#discountType").change(function() {
            if ($(this).val() === '1') {
                $('.discount').removeClass('hide');
            } else {
                $('.discount').addClass('hide');
                $('#discount').val('');
                $('#discount_from').val('');
                $('#discount_to').val('');
            }
        });


        $('.checker').click(function() {

            if ($('.checker').filter(':checked').length > 0){
                $('#quantitytitle').show();
            }else{
                $('#quantitytitle').hide();
            }

            if (this.checked) {
                $('#quantity-' + this.id).show();
                $('#quantity-' + this.id).prop('disabled', false);
                $('#quantity-' + this.id).prop('required', true);
            } else {
                $('#quantity-' + this.id).hide();
                $('#quantity-' + this.id).val('');
                $('#quantity-' + this.id).prop('required', false);
                $('#quantity-' + this.id).prop('disabled', true);
            }

        });
    </script>
@endpush

