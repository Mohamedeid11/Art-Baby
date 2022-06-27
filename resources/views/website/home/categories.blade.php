@if (count($categories) > 0)
    <div class="categories my-5">
        <div class="container">
            <div class="title py-5 text-center">
                <h1 class="my_bold display-4">@lang('website.categories')</h1>
            </div>
            <div class="my-3">
                <div class="brands">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="my-3">
                                    <div class="row">
                                        @isset($categories)
                                            @foreach ($categories as $category)
                                                <div class="col-12 col-md-4">
                                                    <a style="text-decoration: none"
                                                        href="{{ route('search', ['category'=>$category['id']]) }}">
                                                        <div class="text-center my-4 border">
                                                            <button type="submit" class="dropdown-item" name="key"
                                                                value="{{ $category['id'] }}" form="searchCategories">
                                                                <img src="{{ $category->image }}"
                                                                    class="img-fluid d-block point m-auto pb-3"
                                                                    style="    height: 150px;">
                                                                <span
                                                                    class="h4 font-weight-bold">{{  mb_strimwidth( $category['name_' . app()->getLocale()], 0, 20, "...")  }}</span>
                                                            </button>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif
