<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('assets_' . app()->getLocale() . '/images/favicon_1.ico') }}">

    <title>@lang('login.dashboardTitle')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@400;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Changa', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Changa', sans-serif !important;
        }
    </style>

    <link href="{{ asset('assets_' . app()->getLocale() . '/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_' . app()->getLocale() . '/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_' . app()->getLocale() . '/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_' . app()->getLocale() . '/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_' . app()->getLocale() . '/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_' . app()->getLocale() . '/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_' . app()->getLocale() . '/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets_' . app()->getLocale() . '/js/modernizr.min.js') }}"></script>

</head>

<body @if(app()->isLocale('ar')) dir="rtl" @endif>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> @lang('login.login')  <strong class="text-custom">@lang('login.management')</strong> </h3>
        </div>
        <div class="panel-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('danger'))
                <div class="alert alert-danger">
                    {{ session()->get('danger') }}
                </div>
            @endif
            <form class="form-horizontal m-t-20" action="{{ route('dashboard.login') }}" method="POST">
                @csrf
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="email" required="" placeholder="@lang('login.email')">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="@lang('login.password')">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" name="remember" type="checkbox">
                            <label for="checkbox-signup">
                                @lang('login.remember')
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" name="submit">@lang('login.login')</button>
                    </div>
                </div>
                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <!--<a  href="email_recover.php" class="text-dark"><i class="fa fa-lock m-r-5"></i> نسيت كلمة المرور؟</a>-->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <!--<p>لا أمتلك حساب حتى الآن؟ <a href="#" class="text-primary m-l-5"><b>تسجيل عضوية جديدة</b></a></p>-->
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer text-right">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                @lang('login.copyRights') {{ date('Y') }}
            </div>

        </div>
    </div>
</footer>
<!-- End Footer -->
