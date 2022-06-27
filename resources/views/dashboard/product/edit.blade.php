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
                                <li class="active">@lang('dashboard.editProduct')</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                @include('dashboard.layouts.messages')
                                <form method="POST" action="{{ route('products.update', $product['id']) }}"
                                    enctype="multipart/form-data" data-parsley-validate novalidate>
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-md-6">
                                        <label for="category">@lang('dashboard.category')</label>
                                        <select id="category" name="category" required class="form-control">
                                            @foreach ($categories as $category)
                                                <option {{ $category['id'] == $product['category_id'] ? 'selected' : '' }}
                                                    value="{{ $category['id'] }}">
                                                    {{ $category['name_' . app()->getLocale()] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="price">@lang('dashboard.price') </label>
                                            <input id="price" type="text" name="price" required
                                                placeholder="@lang('dashboard.price') " class="form-control"
                                                value="{{ $product['price'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="name_ar">@lang('dashboard.name_ar')</label>
                                        <input id="name_ar" type="text" name="name_ar" required
                                            placeholder="@lang('dashboard.name_ar')" class="form-control"
                                            value="{{ $product['name_ar'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name_en">@lang('dashboard.name_en')</label>
                                        <input id="name_en" type="text" name="name_en" required
                                            placeholder="@lang('dashboard.name_en')" class="form-control"
                                            value="{{ $product['name_en'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="desc_ar">@lang('dashboard.desc_ar')</label>
                                        <textarea id="desc_ar" name="desc_ar" required
                                            placeholder="@lang('dashboard.desc_ar')"
                                            class="form-control">{{ $product['desc_ar'] }}</textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="desc_en">@lang('dashboard.desc_en')</label>
                                        <textarea id="desc_en" name="desc_en" required
                                            placeholder="@lang('dashboard.desc_en')"
                                            class="form-control">{{ $product['desc_en'] }}</textarea>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12  sizeqtitles">
                                        <div class="row"  style="display: -webkit-box;">
                                            <div class="form-group " style="width: 50%">
                                                <label for="size">@lang('dashboard.size')</label>
                                            </div>
                                            <div class="form-group " style="width: 50%">
                                                <label id="quantitytitle" for="quantity">@lang('dashboard.quantity')</label>
                                            </div>
                                        </div>
                                        <div class="sizeqtitlestoggle">
                                            <div class="row"></div>

                                            @php
                                                $peoductsizes = $product->size()->pluck('size_id')->toArray();
                                                $productquantity = $product->size()->orderBy('size_products.id','asc')->pluck('quantity')->toArray();
                                                $iter = -1;
                                            @endphp

                                            @foreach ($sizes as $key => $size)
                                                @php
                                                    if (in_array($size['id'], $peoductsizes)) {
                                                        $iter++;
                                                    }
                                                @endphp
                                                <div class="row"style="display: -webkit-box; padding: 10px 10px; @if ($loop->index % 2 == 0)  background: #CCC; @endif ">
                                                    <div style="width: 50%" class="col">
                                                        <input class="form-check-input checker" name="size[]" type="checkbox" {{ in_array($size['id'], $peoductsizes) ? 'checked' : '' }} id="{{ $size['id'] }}" value="{{ $size['id'] }}">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            {{ $size['name_' . app()->getLocale()] }}
                                                        </label>
                                                    </div>
                                                    <div style="width: 50%" class="col">
                                                        <input id="quantity-{{ $size['id'] }}" type="number" value="{{ in_array($size['id'], $peoductsizes) ? $productquantity[$iter] : '' }}" style="border: 1px #000000 solid;display:{{ in_array($size['id'], $peoductsizes) ? '' : 'none' }} " name="quantity[]" placeholder="@lang('dashboard.quantity')" class="form-control ">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="color">@lang('dashboard.color')</label>
                                        <select id="color" name="color[]" required class="form-control" multiple>
                                            <option value="">---</option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color['id'] }}"
                                                    {{ in_array(
                                                        $color['id'],
                                                        $product->color()->pluck('color_id')->toArray(),
                                                    )
                                                        ? 'selected'
                                                        : '' }}>
                                                    {{ $color['name_' . app()->getLocale()] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="weight">@lang('dashboard.weight')</label>
                                        <select id="weight" name="weight" required class="form-control">
                                            <option value="">---</option>
                                            @foreach ($weights as $weight)
                                                <option value="{{ $weight['id'] }}"
                                                    {{ $product['weight_id'] == $weight['id'] ? 'selected' : '' }}>
                                                    W : {{ $weight['weight'] }} - P : {{ $weight['price'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="code">@lang('dashboard.code')</label>
                                        <input id="code" type="text" name="code" required
                                            placeholder="@lang('dashboard.code')" class="form-control"
                                            value="{{ $product['code'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cost">@lang('dashboard.cost')</label>
                                        <input id="cost" type="text" name="cost" required
                                            placeholder="@lang('dashboard.cost')" class="form-control"
                                            value="{{ $product['cost'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="discountType">@lang('dashboard.isThereDiscount')</label>
                                        <select id="discountType" name="discountType" required class="form-control">
                                            <option value="0">@lang('dashboard.no')</option>
                                            <option {{ !is_null($product['discount']) ? 'selected' : '' }} value="1">
                                                @lang('dashboard.yes')</option>
                                        </select>
                                    </div>
                                    <div
                                        class="form-group col-md-6 discount {{ is_null($product['discount']) ? 'hide' : '' }}">
                                        <label for="discount">@lang('dashboard.discount')</label>
                                        <input id="discount" type="text" name="discount"
                                            placeholder="@lang('dashboard.discount')" class="form-control"
                                            value="{{ $product['discount'] }}">
                                    </div>
                                    <div
                                        class="form-group col-md-6 discount {{ is_null($product['discount_from']) ? 'hide' : '' }}">
                                        <label for="discount_from">@lang('dashboard.discount_from')</label>
                                        <input id="discount_from" type="date" name="discount_from"
                                            placeholder="@lang('dashboard.discount_from')" class="form-control"
                                            value="{{ $product['discount_from'] }}">
                                    </div>
                                    <div
                                        class="form-group col-md-6 discount {{ is_null($product['discount_to']) ? 'hide' : '' }}">
                                        <label for="discount_to">@lang('dashboard.discount_to')</label>
                                        <input id="discount_to" type="date" name="discount_to"
                                            placeholder="@lang('dashboard.discount_to')" class="form-control"
                                            value="{{ $product['discount_to'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="images">@lang('dashboard.images')</label>
                                        <input type="file" name="images[]" id="images" class="filestyle" multiple
                                            data-buttonname="btn-primary">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="visibility">@lang('dashboard.visibility')</label>
                                        <select class="form-control  select2me" required id="visibility" name="display">
                                            <option {{ $product['display'] == 0 ? 'selected' : '' }} value="0">
                                                @lang('dashboard.hidden')</option>
                                            <option {{ $product['display'] == 1 ? 'selected' : '' }} value="1">
                                                @lang('dashboard.visible')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="deliverable">@lang('dashboard.deliverable')</label>
                                        <select class="form-control  select2me" required id="deliverable"
                                            name="deliverable">
                                            <option {{ $product['deliverable'] == 0 ? 'selected' : '' }} value="0">
                                                @lang('dashboard.no')</option>
                                            <option {{ $product['deliverable'] == 1 ? 'selected' : '' }} value="1">
                                                @lang('dashboard.yes')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="featured">@lang('dashboard.featured')</label>
                                        <select class="form-control  select2me" required id="featured" name="featured">
                                            <option {{ $product['featured'] == 0 ? 'selected' : '' }} value="0">
                                                @lang('dashboard.no')</option>
                                            <option {{ $product['featured'] == 1 ? 'selected' : '' }} value="1">
                                                @lang('dashboard.yes')</option>
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
                                <div class="table-responsive">
                                    <table class="table table-striped" id="custom_tbl_dt">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="text-align:center;">@lang('dashboard.image')</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($product->images) > 0)
                                                @foreach ($product->images as $key => $image)
                                                    <tr class="gradeX {{ $image['id'] }}">
                                                        <td style="text-align:center;">{{ $key + 1 }}</td>
                                                        <td style="text-align:center;">
                                                            <img src="{{ $image['image'] }}"
                                                                alt="{{ $product['name_en'] }}" width="150">
                                                        </td>
                                                        <td class="actions">
                                                            <a data-id="{{ $image['id'] }}" class="deletemsg"
                                                                id="deleteParent"><i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="3" style="text-align: center!important;">
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
    </div>

    <form method="POST" class="deleteForm">
        @csrf
        @method('DELETE')
    </form>

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
                            deleteForm.attr('action', "../images/" + id);
                            deleteForm.submit();
                        }
                    }
                }
            });
        });


        $('.checker').click(function() {

            if ($('.checker').filter(':checked').length > 0) {
                $('#quantitytitle').show();
            } else {
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
fa
