<!DOCTYPE html>
<html>

<head>

    {{-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> --}}

    {{-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> --}}
    @include('dashboard.layouts.heads')
    @stack('custom-css')
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/lj3niasi9s3d111t7rdmcli3m6lwbc6k3gs85xciou7c0oyn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '.mytextarea'
      });
    </script>
    <style>
        .ui-icon-carat-d {

            display: none;
        }

        /* Toggle Button */
        .cm-toggle {
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
            position: relative;
            border: 0;
            outline: 0;
            cursor: pointer;
            margin: 10px;
        }


        /* To create surface of toggle button */
        .cm-toggle:after {
            content: '';
            width: 60px;
            height: 28px;
            display: inline-block;
            background: rgba(196, 195, 195, 0.55);
            border-radius: 18px;
            clear: both;
        }


        /* Contents before checkbox to create toggle handle */
        .cm-toggle:before {
            content: '';
            width: 32px;
            height: 32px;
            display: block;
            position: absolute;
            left: 0;
            top: -3px;
            border-radius: 50%;
            background: rgb(255, 255, 255);
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
        }


        /* Shift the handle to left on check event */
        .cm-toggle:checked:before {
            left: 32px;
            box-shadow: -1px 1px 3px rgba(0, 0, 0, 0.6);
        }

        /* Background color when toggle button will be active */
        .cm-toggle:checked:after {
            background: #16a085;
        }

        /* Transition for smoothness */
        .cm-toggle,
        .cm-toggle:before,
        .cm-toggle:after,
        .cm-toggle:checked:before,
        .cm-toggle:checked:after {
            transition: ease .3s;
            -webkit-transition: ease .3s;
            -moz-transition: ease .3s;
            -o-transition: ease .3s;
        }

    </style>
</head>

<body @if (app()->isLocale('ar')) style="direction: rtl" @endif>
    @include('dashboard.layouts.leftSidebar')
    @yield('content')
    @include('dashboard.layouts.footer_text')
    @include('dashboard.layouts.footer')
    @stack('custom-scripts')
    <script>
        @if (Session::has('message'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
