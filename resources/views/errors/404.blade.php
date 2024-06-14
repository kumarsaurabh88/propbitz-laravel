
@include('website.header')
<section class="error-page">
    <div class="container">
        <div class="row justify-content-center">
                
            <div class="col-10 col-md-7 col-lg-4">
                <img src="{{url('website/img/error-404.png')}}" class="img-responsive" alt="404"> 
                <a href="{{url('/')}}" class="butn-default">Go to Home<span></span></a>
            </div>

        </div>
    </div>  
</section>


@include('website.footer')


<!-- <script>
        var timer = setTimeout(function() {
            window.location='/'
        }, 3000);
    </script> -->