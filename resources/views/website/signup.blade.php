@include('website.header')

<section class="signup-section signup-area section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="signup-page">
                    <div class="signup-inner">
                        <h3 class="heading"> Tell Us About Yourself</h3>
                        <button class="sign-btn"> <img src="{{ ('website/images/google-icon.png')}}">Sign up with Google
                        </button>
                        <div class="or-wraps">
                            <p>or</p>
                        </div>
                    </div>
                    <div class="signup-form">
                        <form>
                            <div class="row  box8">
                                <div class="col-sm-6 form-group">
                                    <label for="name-f">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="name-f"
                                        placeholder="Enter First Name" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="name-l">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="name-l"
                                        placeholder="Enter Last Name" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="tel">Contact Number</label>
                                    <input id="mobile_codee" type="tel" name="phone" class="form-control" id="tel"
                                        placeholder="" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email">Email ID</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email ID" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="pass">Password</label>
                                    <input type="Password" name="password" class="form-control" id="pass"
                                        placeholder="Enter your password." required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="pass2">Confirm Password</label>
                                    <input type="Password" name="cnf-password" class="form-control" id="pass2"
                                        placeholder="Re-enter your password." required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="Code">Referral Code</label>
                                    <input type="code" class="form-control" name="Code" id="Code" placeholder=""
                                        required>
                                </div>
                                <div class="col-sm-12">
                                    <input type="checkbox" class="form-check d-inline" id="chb" required>
                                    <label for="chb" class="form-check-label">&nbsp;By continuing, you are agreeing to
                                        our Terms of Service and Privacy Policy.
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="checkbox" class="form-check d-inline" id="chb" required>
                                    <label for="chb" class="form-check-label">&nbsp;I wish to receive all new listing
                                        related updates on Whatsapp (optional)
                                    </label>
                                </div>
                                <div class="col-sm-12 form-group mb-0">
                                    <div class="form-wraps">
                                        <button class="theme-btn"> <span> Save </span> </button>
                                    </div>
                                    <strong>Already have an access? <a href="#">LogIn</a></strong>
                                    <p class="pvy-wraps">This site is protected by reCAPTCHA and the Google <a
                                            href="#">Privacy Policy</a> and <a href="#"> Terms of Service </a> apply.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.footer')

<script>
    $("#mobile_codee").intlTelInput({
        initialCountry: "in",
        separateDialCode: true,
    });
</script>