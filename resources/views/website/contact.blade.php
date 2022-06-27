@extends('website.layout')
@section('content')
<!--start Breadcrumb-->

<div class="bread py-5 bg-light text-center">
    <div class="container">
        <h3 class="main_bold">@lang('website.contact')</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent d-flex justify-content-center h5 main_bold">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark text-decoration-none">@lang('website.home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('website.contact')</li>
            </ol>
        </nav>
    </div>
</div>



<div class="contact my-4">
    <div class="container">

        <div class="row">

            <div class="col-12 col-md-6">
                <div class="p-2 m-2 w-100 left_border_2 h-100">
                    <h4 class="font-weight-bold pb-3">@lang('dashboard.worktime')</h4>
                    <ul class="list-unstyled px-0">
                        <li class="my-3 main_bold d-flex"><i class="icon-date_range main_color h3 ms-3"></i><span>{{ setting('worktime_'.lang()) }}</span></li>
                        <hr>
                        <li class="my-3 main_bold d-flex">
                            <i class="icon-phone6 main_color h5 ms-2"></i>
                            <a style="    text-decoration: none;color: black;" target="_blank" href="tel:{{ setting('phone') }}">
                                <span>{{ setting('phone') }} </span>
                            </a>
                        </li>
                        <li class="my-3 main_bold d-flex">
                            <i class="icon-envelope main_color h5 ms-1"></i>
                            <a style="    text-decoration: none;color: black;" target="_blank" href="mailto:{{ setting('email') }}">
                                <span>{{ setting('email') }} </span>
                            </a>
                        </li>
                        <li class="my-3 main_bold d-flex">
                            <i class="fas fa-map-marked  main_color h5 ms-1"></i></i>
                            <span>{{ setting('address_'.app()->getlocale()) }} </span>
                        </li>
                        <li class="my-3 main_bold d-flex">
                            <i class=" icon-facebook-with-circle   main_color h5 ms-1"></i>
                            <a style="    text-decoration: none;color: black;" target="_blank" href="{{ setting('facebook') }}">
                                <span>{{ str_replace("https://www.facebook.com/", "",setting('facebook')) }} </span>
                            </a>
                        </li>
                        <li class="my-3 main_bold d-flex">
                            <i class="icon-twitter  main_color h5 ms-1"></i>
                            <a style="    text-decoration: none;color: black;" target="_blank" href="{{ setting('twitter') }}">
                                <span>{{ str_replace("http://twitter.com", "",setting('twitter')) }} </span>
                            </a>
                        </li>
                        <li class="my-3 main_bold d-flex">
                            <i class="icon-instagram  main_color h5 ms-1"></i>
                            <a style="    text-decoration: none;color: black;" target="_blank" href="{{ setting('instagram') }}">
                                <span>{{ str_replace("https://instagram.com", "",setting('instagram')) }} </span>
                            </a>
                        </li>
                        <li class="my-3 main_bold d-flex">
                            <i class="icon-snapchat  main_color h5 ms-1"></i>
                            <a style="    text-decoration: none;color: black;" target="_blank" href="{{ setting('snapchat') }}">
                                <span>{{ str_replace("http://snapchat.com", "",setting('snapchat')) }} </span>
                            </a>
                        </li>
                        <li class="my-3 main_bold d-flex">
                            <i class="fa fa-whatsapp   main_color h5 ms-1"></i>
                            <a style="    text-decoration: none;color: black;" target="_blank" href="https://api.whatsapp.com/send/?phone=%+973{{  setting('whatsapp')  }}&text&app_absent=0">
                                <span>{{ setting('whatsapp') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="m-2">
                    <h4 class="main_bold">@lang('website.contact')</h4>
                    <form action="{{ route('leaveMessage') }}" method="post">
                        @csrf
                        <div class="my-2 mx-1 p-2">
                            <input required type="text" class="border rounded p-3 w-100 shadow" name="name" placeholder="@lang('website.name')">
                        </div>
                        <div class="my-2 mx-1 p-2">
                            <input required type="email" class="border rounded p-3 w-100 shadow" name="email" placeholder="@lang('login.email')">
                        </div>
                        <div class=" my-2 p-2 mx-1">
                            <input required type="text" class="border rounded p-3 w-100 shadow" name="phone" placeholder="@lang('website.phone')">
                        </div>
                        <div class=" my-2 p-2 mx-1">
                            <input required type="text" class="border rounded p-3 w-100 shadow" name="subject" placeholder="@lang('dashboard.title')">
                        </div>
                        <div class=" my-2 p-2 mx-1">
                            <textarea name="message" class="border rounded p-3 w-100 shadow" id="" cols="30" placeholder="@lang('website.subject')" rows="10"></textarea>
                        </div>
                        <div class="my-3 p-2 mx-1 text-center">
                            <button class="main_bt border-0 py-3 w-100 rounded w-50 transition-me">@lang('website.send')</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>


@endsection
