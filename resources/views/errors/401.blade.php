@include('website.header')

<section class="thankyou-sec error-404 unauthorized">
    <img class="absolute-circle" src="{{url('website/assets/images/thank-circle.png')}}" alt="img">
    <div class="container">
        <div class="thankyou-inner">
            <img class="absolute-texture" src="{{url('website/assets/images/thank-texture.png')}}" alt="img">
            <h1 class="title">401</h1>
            <p>You are not an Authorized User...</p>
            <a href="{{url('/')}}" class="btn-default">
                go back to home
            </a>
        </div>
    </div>
</section>


@include('website.footer')

</body>
</html>
<!-- <script>
        var timer = setTimeout(function() {
            window.location='/'
        }, 3000);
    </script> -->