<div class="follow main_bg py-4 mt-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <h1 class="my_bold text-white" style="font-family: 'Quattrocento', serif;">
                    @lang('website.followourupdate')</h1>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group mb-3">
                    <form action="{{ route('follow') }}" method="post" style="width: 100% !important;">
                        @csrf
                        @method('POST')
                        <input style="width: 60%;float: right;" type="text" class="form-control border-0 p-3" placeholder="@lang('dashboard.email')"
                            aria-label="Recipient's username" name="email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button style="width: 40% !important" type="@lang('website.submit')" class="main_bt main_border transition-me py-3 px-5">@lang('website.submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
