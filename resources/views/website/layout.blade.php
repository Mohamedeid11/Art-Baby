<!DOCTYPE html>
<html>

<head>
    @include('website.layouts.heads')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @stack('custom-css')
    <style>
        .dropdown {
            margin: 0px 5px;
        }

        // workaround
        .intl-tel-input {
            display: table-cell;
        }

        .intl-tel-input .selected-flag {
            z-index: 4;
        }

        .intl-tel-input .country-list {
            z-index: 5;
        }

        .input-group .intl-tel-input .form-control {
            border-top-left-radius: 4px;
            border-top-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 0;
        }

        .no-arrow {
            -moz-appearance: textfield;
        }

        .no-arrow::-webkit-inner-spin-button {
            display: none;
        }

        .no-arrow::-webkit-outer-spin-button,
        .no-arrow::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        s,
        strike {
            text-decoration: none;
            /*we're replacing the default line-through*/
            position: relative;
            display: inline-block;
            /* keeps it from wrapping across multiple lines */
        }

        s:after,
        strike:after {
            content: "";
            /* required property */
            position: absolute;
            bottom: 0;
            left: 0;
            border-top: 2px solid red;
            height: 45%;
            /* adjust as necessary, depending on line thickness */
            /* or use calc() if you don't need to support IE8: */
            height: calc(50% - 1px);
            /* 1px = half the line thickness */
            width: 100%;
            transform: rotateZ(-4deg);
        }

        .breadcrumb-item+.breadcrumb-item::before {
            float: none;
            padding-right: 0.5rem;
            color: #6c757d;
            content: var(--bs-breadcrumb-divider, "\/");
        }







        @if (app()->isLocale('ar'))
            .dropdown-menu[data-bs-popper] {
                left: 0px;
            }
            .toast-top-right {
                position: absolute;
                top: 15%;
                left: 20%;
                -ms-transform: translateX(-50%) translateY(-50%);
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
        @else
            .dropdown-menu[data-bs-popper] {
                left: -250%;
            }
            .toast-top-right {
                position: absolute;
                top: 15%;
                -ms-transform: translateX(-50%) translateY(-50%);
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
        @endif

    </style>


</head>

<body @if (app()->isLocale('ar')) dir="rtl" @endif>

    @include('website.layouts.navBar')
    @yield('content')
    @include('website.layouts.footer')
    @stack('custom-scripts')


    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton": true
            , "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options = {
            "closeButton": true
            , "progressBar": true
        }
        toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options = {
            "closeButton": true
            , "progressBar": true
        }
        toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options = {
            "closeButton": true
            , "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
        @endif

        function showHide(elem) {
            document.getElementById('myAccount').style.display = 'none';
            document.getElementById('myAddress').style.display = 'none';
            document.getElementById('myOrder').style.display = 'none';
            document.getElementById('myFavourite').style.display = 'none';
            if (elem == 1) {
                document.getElementById('myAccount').style.display = 'block';
            }
            if (elem == 2) {
                document.getElementById('myAddress').style.display = 'block';
            }
            if (elem == 3) {
                document.getElementById('myOrder').style.display = 'block';
            }
            if (elem == 4) {
                document.getElementById('myFavourite').style.display = 'block';
            }
        }

        function showHide2(elem) {
            document.getElementById('currentOrder').style.display = 'none';
            document.getElementById('previousOrder').style.display = 'none';
            $('.nav-link-order-1').removeClass('active');
            $('.nav-link-order-2').removeClass('active');
            if (elem == 1) {
                document.getElementById('currentOrder').style.display = 'block';
                $('.nav-link-order-1').addClass('active');
            }
            if (elem == 2) {
                document.getElementById('previousOrder').style.display = 'block';
                $('.nav-link-order-2').addClass('active');
            }
        }

    </script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


    <script>
        $('.icon-heart-o').click(function() {

            $(this).toggleClass('icon-heart7');

        });
        $('.profileFavorite').click(function() {
            @auth('client')
            const heartIcon = $(this);
            $.ajax({
                type: "POST"
                , url: '{{ route("favorite") }}'
                , data: {
                    _token: '{{ csrf_token() }}'
                    , product_id: $(this).attr('data-id')
                }
                , success: function() {
                    $(this).toggleClass('icon-heart7');
                    //heartIcon.parents('.fav').remove();
                }
            , });
            @else
            alert('@lang("website.needLogin")');
            @endauth
        });

    </script>

    @yield('last-js')
    
</body>

</html>
