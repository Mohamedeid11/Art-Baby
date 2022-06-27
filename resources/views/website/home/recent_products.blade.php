@if (count($ournew) > 0)
<div class="news">
    <div class="container">
        <div class="title py-5 text-center">
            <h1 class="my_bold">@lang('website.ournew')</h1>
        </div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="position-relative">
                    <img src="{{ $ournew[1]->image }}" class="img-fluid" alt="image">

                    <div class="collection px-4">
                        <div class="row @if(app()->isLocale('en')) justify-content-md-end @endif align-items-center w-100 h-100">
                            <div class="col-12 col-md-5 h-100">
                                <div class="d-flex align-items-center h-100 w-100 grag">
                                    <div class="w-100">
                                        <div class="d-flex @if(app()->isLocale('en'))justify-content-md-start @endif   justify-content-end">
                                            <div class="mb-4">
                                                <span class="d-block display-3 text-center py-2" style="font-family: 'Architects Daughter', cursive;">@lang('website.New')</span>
                                                <span class="d-block display-3 text-center py-2" style="font-family: 'Architects Daughter', cursive;">@lang('website.Collection')</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end align-items-end">
                                            <form action="{{ route('categories') }}" method="GET">
                                                <button type="submit" class="main_button main_border h4 rounded py-2 transition-me px-5 my-3">@lang('website.Shop_now')</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6">
                <div class="position-relative mt-4">
                    <img src="{{ $ournew[2]->image }}" class="img-fluid" alt="image">
                    <div class="collection point">
                        <div class="d-flex align-items-end justify-content-md-start w-100 h-100">
                            <div class="ms-4">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="hidden" name="category[]" value="{{ $cats[0]->id }}">
                                    <button type="submit" class="main_button main_border h4 rounded py-2 transition-me px-5 my-3">
                                        @if (app()->getLocale() == 'ar')
                                        {{ $cats[0]->name_ar }}
                                        @else
                                        {{ $cats[0]->name_ar }}
                                        @endif
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="position-relative mt-4">
                    <img src="{{ $ournew[0]->image }}" class="img-fluid" alt="image">
                    <div class="collection point">
                        <div class="d-flex align-items-end justify-content-md-start w-100 h-100">
                            <div class="ms-4">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="hidden" name="category[]" value="{{ $cats[1]->id }}">
                                    <button type="submit" class="main_button main_border h4 rounded py-2 transition-me px-5 my-3">
                                        @if (app()->getLocale() == 'ar')
                                        {{ $cats[1]->name_ar }}
                                        @else
                                        {{ $cats[1]->name_ar }}
                                        @endif
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
