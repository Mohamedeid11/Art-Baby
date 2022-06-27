@extends('website.layout')
@section('content')

<div id="forgert_pass">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="insert_2 text-center bg-white d-flex justify-content-center align-items-center p-4">
            <div class="text-center w-100 h-100">
{{--                here why he did't get the user image from database--}}
                <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}"
                    class="img-fluid" alt="image">
                <h5>@lang('website.signUp')</h5>
                <input autocomplete="off" type="hidden" name="country" id="forgert_pass_country">
                <div class="my-4">
                    <div class="position-relative forgert_pass_ul">
                        <input autocomplete="off" type="text" inputmode="numeric"
                            onclick="this.setSelectionRange(0, this.value.length)"
                            class="w-100 shadow my-2 px-5 py-3 border-0 no-arrow" required
                            placeholder="@lang('website.phone')" id="forgert_pass_number" name="phone">
                    </div>
                </div>
                <div id="recaptcha-container2"></div>
                <div class="d-flex justify-content-center my-3">
                    <div onclick="sendOTPforgert_pass();" id="forgert_pass_first"
                        class="btn  main_button main_border main_bold py-2 px-5 rounded transition-me main_bold">
                        @lang('website.submit')</div>
                </div>
                <div class="my-4 forgert_pass_last" style="display: none !important;">
                    <div class="position-relative">
                        <input autocomplete="off" style="border: 1px solid #81ffc4 !important; border-radius: 250px;"
                            type="text" class="w-100 shadow my-2 px-5 py-3 border-0"
                            placeholder="@lang('dashboard.verification_code')" id="forgert_pass_verification">
                    </div>
                </div>
                <div class="btn  d-flex justify-content-center my-3 forgert_pass_last"
                    style="display: none !important;">
                    <div onclick="resetpassform()"
                        class="main_button main_border main_bold py-2 px-5 rounded transition-me main_bold">
                        @lang('dashboard.code')</div>
                </div>
                <small class="text-center text-danger login haveAccount"
                    style="cursor: pointer">@lang('website.haveAccount')</small>
            </div>
        </div>
    </div>
</div>

<div id="resetpass" style="display: none">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="insert_2 text-center bg-white d-flex justify-content-center align-items-center p-4">
            <div class="text-center w-100 h-100">
                <img src="{{ asset('website/assets_en/img/urn_aaid_sc_US_43d3b270-9730-43ca-9e91-cccbbdfe2830 (6).png') }}"
                    class="img-fluid" alt="image">
                <h5>@lang('website.signUp')</h5>
                <form action="{{ route('resetpass') }}" method="POST" enctype="multipart/form-data"
                    id="resetpassform">
                    @csrf
                    <div class="my-4">
                        <input autocomplete="off" type="hidden" name="country" id="forgert_pass_country">
                        <div class="position-relative forgert_pass_ul">
                            <input autocomplete="off" type="text" readonly inputmode="numeric"
                                onclick="this.setSelectionRange(0, this.value.length)"
                                class="w-100 shadow my-2 px-5 py-3 border-0 no-arrow" required
                                placeholder="@lang('website.phone')" id="resetpassphone" name="phone">
                        </div>
                    </div>
                    <div class="position-relative">
                        <input autocomplete="off" type="password" minlength="6"
                            class="w-100 shadow my-2 px-5 py-3 border-0" placeholder="@lang('website.password')"
                            name="password" id="reset_password" required>
                        <i class="icon-lock main_color h1 position-absolute"></i>
                    </div>
                    <div class="position-relative">
                        <input autocomplete="off" type="password" minlength="6" name="password_confirmation"
                            id="reset_password_confirmation" class="w-100 shadow my-2 px-5 py-3 border-0"
                            placeholder="@lang('website.password')" required>
                        <i class="icon-lock main_color h1 position-absolute"></i>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <div onclick="verifyforgert_pass();" id="forgert_pass_first"
                            class="btn  main_button main_border main_bold py-2 px-5 rounded transition-me main_bold">
                            @lang('website.submit')</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



@section('last-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>



    <script type="text/javascript">
        var firebaseConfig = {
            apiKey: "AIzaSyDV75jLXhaz016PTJr-qiHGeJAlw_d0BRI",
            authDomain: "artbaby-c8ba5.firebaseapp.com",
            projectId: "artbaby-c8ba5",
            storageBucket: "artbaby-c8ba5.appspot.com",
            messagingSenderId: "1005464416083",
            appId: "1:1005464416083:web:64381e550c67a46d853ba6",
            measurementId: "G-NL2GCJYSH7"
        };

        firebase.initializeApp(firebaseConfig);

        window.onload = function() {
            window.recaptchaVerifier2 = new firebase.auth.RecaptchaVerifier('recaptcha-container2');
            recaptchaVerifier2.render();
        };




        //forger pass opt
        function sendOTPforgert_pass() {

            number = $("#forgert_pass_number").val().replace(/\s/g, '');;
            $('#resetpassphone').val(number);
            countrycode = $('.forgert_pass_ul .iti__selected-flag').attr('title').split(":")[1];
            country = $('.forgert_pass_ul .iti__selected-flag').attr('title').split(":")[0];
            if (number[0] == 0) {
                number = number.substr(1);
            }
            number = countrycode + number;
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier2).then(function(confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                $("#forgert_pass_first").hide();
                $(".forgert_pass_last").show();
            });
        }

        function resetpassform() {
            var code = $("#forgert_pass_verification").val();
            coderesult.confirm(code).then(function(result) {
                var user = result.user;
                $('#forgert_pass').hide();
                $('#resetpass').show();

            }).catch(function(error) {
                toastr.error('@lang("messages.invalidcode")');
            });
        }


        function verifyforgert_pass() {
            if ($("#reset_password").val() == $("#reset_password_confirmation").val()) {
                $("#resetpassform").submit();
            }
        }


        function getIp(callback) {
            fetch('https://ipinfo.io/json?token=<your token>', {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then((resp) => resp.json())
                .catch(() => {
                    return {
                        country: 'us',
                    };
                })
                .then((resp) => callback(resp.country));
        }
        const phoneInputField = document.querySelector("#forgert_pass_number");

        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

    </script>
@endsection






