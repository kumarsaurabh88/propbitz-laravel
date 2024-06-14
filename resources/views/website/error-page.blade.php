@include('website.header')

<section class="error-page section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-inner">
                    <h1 class="heading"> 404 </h1>
                    <strong>Lost in the Maze: Let’s Guide You Back</strong>
                    <p>Oops! Looks like this page is enjoying a secret vacation.</p>
                    <div class="error-btn">
                        <a href="/" class="theme-btn"> <span>GO HOME </span></a>
                    </div>
                    <div class="error-img">
                        <img src="{{url ('website/images/error-building.png') }}" alt="Thank You " />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('website.footer')