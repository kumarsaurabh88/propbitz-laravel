@include('website.header')

<section class="signup-section signup-area section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-7">
                <div class="signup-page otp-page">
                    <div class="signup-inner">
                        <h3 class="heading"> LogIn</h3>
                        <p class="otp-text">OTP Verification</p>
                        <h4>Please enter 6 digit code sent on</h4>
                        <p class="number">(+91) 7298 7474 00</p>
                    </div>
                    <div class="otp-form">
                        <form action="#" id="Login_form" class="otp-password">
                            <input class="form-control otp " type="password" oninput='digitValidate(this)'
                                onkeyup='tabChange(1)' maxlength=1>
                            <input class="form-control otp" type="password" oninput='digitValidate(this)'
                                onkeyup='tabChange(2)' maxlength=1>
                            <input class="form-control otp " type="password" oninput='digitValidate(this)'
                                onkeyup='tabChange(3)' maxlength=1>
                            <input class="form-control otp " type="password" oninput='digitValidate(this)'
                                onkeyup='tabChange(4)' maxlength=1>
                            <input class="form-control otp " type="password" oninput='digitValidate(this)'
                                onkeyup='tabChange(5)' maxlength=1>
                            <input class="form-control otp " type="password" oninput='digitValidate(this)'
                                onkeyup='tabChange(6)' maxlength=1>
                            <div class="submit_btn">
                                <button type="submit" class="theme-btn"> <span> VERIFY & CONTINUE </span><span></span>
                                </button>
                            </div>
                            <div class="resend-code">
                                <p class="resend-text-bold">Didn’t Receive the Code?</p>
                                <a class="resend-text" href="javascript:void(0)" id="otp_Resend_button"><i
                                        class="fa fa-refresh resend_code" aria-hidden="true"></i> Resend
                                    Code</a>
                            </div>
                            <p class="pvy-wraps">This site is protected by reCAPTCHA and the Google <a href="#">Privacy
                                    Policy</a> and <a href="#"> Terms of Service </a> apply.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.footer')

<script>
    let digitValidate = function(ele) {
        console.log(ele.value);
        ele.value = ele.value.replace(/[^0-9]/g, '');
    }
    let tabChange = function(val) {
        let ele = document.querySelectorAll('.otp');
        if (ele[val - 1].value != '') {
            ele[val].focus()
        } else if (ele[val - 1].value == '') {
            ele[val - 2].focus()
        }
    }
</script>