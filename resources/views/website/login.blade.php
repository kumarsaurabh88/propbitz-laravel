@include('website.header')

<section class="signup-section signup-area section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="signup-page">
                    <div class="signup-inner">
                        <h3 class="heading"> LogIn </h3>
                        <button class="sign-btn"> <img src="{{url ('images/google-icon.png') }}">Sign up with Google
                        </button>
                        <div class="or-wraps">
                            <p>or</p>
                        </div>
                    </div>
                    <div class="signup-form login-page">
                        <ul class="nav  form-tabber" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Email ID</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Phone Number</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <form>
                                    <div class="row  box8">
                                        <div class="col-sm-12 form-group">
                                            <label for="email">Enter Your Registered Email ID</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email ID" required>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label for="pass">Enter Password</label>
                                            <input type="Password" name="password" class="form-control" id="pass"
                                                placeholder="Enter your password." required>
                                        </div>
                                        <div class="col-sm-12 form-group mb-0">
                                            <div class="form-wraps">
                                                <button class="theme-btn"> <span>LOGIN</span></button>
                                            </div>
                                            <strong>Don’t have an account? <a href="#">Register</a></strong>
                                            <a class="forget-items">Forgot Password?</a>
                                            <p class="pvy-wraps">This site is protected by reCAPTCHA and the Google <a
                                                    href="#">Privacy Policy</a> and <a href="#"> Terms of Service </a>
                                                apply.
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <form>
                                    <div class="row  box8">
                                        <div class="col-sm-12 form-group">
                                            <label for="email">Enter Your Registered Phone Number </label>
                                            <input type="email" id="phone_codee" class="form-control" name="email"
                                                id="email" placeholder="Email ID" required>
                                        </div>
                                        <div class="col-sm-12 form-group mb-0">
                                            <div class="form-wraps">
                                                <button class="theme-btn"> <span>CONTINUE</span></button>
                                            </div>
                                            <strong>Don’t have an account? <a href="#">Register</a></strong>
                                            <a class="forget-items">Forgot Password?</a>
                                            <p class="pvy-wraps">This site is protected by reCAPTCHA and the Google <a
                                                    href="#">Privacy Policy</a> and <a href="#"> Terms of Service </a>
                                                apply.
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.footer')

<script>
    $("#phone_codee").intlTelInput({
        initialCountry: "in",
        separateDialCode: true,
    });
</script>