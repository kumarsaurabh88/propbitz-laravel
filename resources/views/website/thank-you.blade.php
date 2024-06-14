@include('website.header')

<section class="thank-you section">
    <div class="thank-img">
        <img src="{{url ('website/images/thank-you-bg.png') }}" alt="Thank You " />
    </div>
    <div class="thank-text">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2 class="heading"> Thank You </h2>
                    <div class="text-bg">
                        <p>FOR INVESTING WITH US</p>
                    </div>
                    <div class="text-btn">
                        <button class="theme-btn"> CONTINUE INVESTING <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.footer')