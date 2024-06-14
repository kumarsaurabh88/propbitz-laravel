@include('website.header')

<section class="contact-banner ">
  <img src="{{ url('website/images/contact-banner.png') }}" alt="Banner" />
  <div class="contact-text">
    <div class="container">
      <div class="contact-inner">
        <h1 class="heading">Contact Us</h1>
        <p>Let’s talk about your next project</p>
        <img src="{{ url('website/images/down-img.png') }}" class="img-responsive down-img" alt="Banner" />
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="contact-form section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="form-text">
          <span>LET’S CONNECT</span>
          <h2 class="heading"> Keep in <br>touch </h2>
          <div class="second-text">Lorem ipsum dolor sit amet consectetur. <br>Sed gravida hac egestas nec.</div>
          <p>Lorem ipsum dolor sit amet consectetur. Sed gravida hac egestas nec donec luctus. Molestie in dignissim
            pretium auctor.
            Imperdiet maecenas semper lacus feugiat ut velit. Duis dignissim arcu a enim proin velit tempor sociis.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="keep-form">
          <form action="#" method="post">
            <div class="form-group">
              <input class="form-control" placeholder="Your Name" id="name" type="text" name="Name">
              <img src="{{ url('website/images/form-icon.png') }}" class="img-responsive form-img" alt="Icon" />
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Email Id" id="email" type="email" name="Email">
              <img src="{{ url('website/images/mail.png') }}" class="img-responsive form-img" alt="Icon" />
            </div>
            <div class="form-group">
              <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="name">
              <img src="{{ url('website/images/phone-icon.png') }}" class="img-responsive form-img" alt="Icon" />
            </div>
            <div class="form-group">
              <select class="form-control">
                <option value="">What are you looking for?</option>
                <option value="">Demo 1</option>
                <option value="">Demo 2</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control">
                <option value="">What’s your budget?</option>
                <option value="">Demo 1</option>
                <option value="">Demo 2</option>
              </select>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" name="Message"> How may we be off assistance?* </textarea>
            </div>
            <input class="theme-btn" type="submit" value="SEND" />
        </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="blank-space"></div>
    </div>
    <div class="contact-address">
      <div class="row">
        <div class="col-md-5">
          <div class="address-text">
            <strong>Postal Address</strong>
            <p>511, Udyog Vihar Phase V Rd, Phase V, <br> Udyog Vihar, Sector 19, Gurugram, <br> Haryana 122016</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="address-text">
            <strong>Propbitz HQ</strong>
            <p>Lorem ipsum dolor sit amet consectetur. <br>Risus blandit dictum.<br>
              Id nam eu at pharetra purus congue.
            </p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="address-text">
            <strong>Business Contact</strong>
            <a href="tel:7088 6699 66"> <i class="fa-brands fa-whatsapp"></i> (+91) 7088 6699 66</a>
            <a href="tel:7088 6699 66"> <i class="fa-solid fa-phone"></i> 05947 - 252399</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--  -->
<section class="contact-map section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="{{ url('website/images/map-img.png') }}" class="img-responsive" alt="Icon" />
        <ul class="map-social">
          <li>Connect with us on....</li>
          <li>
            <a href="#">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="contact-faq section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="top-section">
          <span>CURIOUS ABOUT PROCESS</span>
          <h2 class="heading">FAQs </h2>
          <p>Lorem ipsum dolor sit amet ipsum dolor sit amet
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="faq-section">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="heading-1">
                <h5 class="title">
                  <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true"
                    aria-controls="collapse-1">
                    Dolor ornare sed lorem nam nisi et viverra adipiscing?
                  </a>
                </h5>
              </div>
              <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur. Dolor ornare sed lorem nam nisi et viverra adipiscing.
                    Sed diam nisl aliquam
                    proin sollicitudin eu suspendisse id sollicitudin. Tortor etiam orci leo sed libero. Ut nunc
                    vulputate aenean dui purus
                    elementum libero malesuada. Id vitae vitae enim neque suspendisse enim eget aliquam odio. Donec
                    sit nunc massa
                    adipiscing. Aliquet natoque faucibus cursus quisque bibendum mi sapien luctus.
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading-2">
                <h5 class="title">
                  <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false"
                    aria-controls="collapse-2">
                    Lorem ipsum dolor sit amet consectetur?
                  </a>
                </h5>
              </div>
              <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur. Dolor ornare sed lorem nam nisi et viverra adipiscing.
                    Sed diam nisl aliquam
                    proin sollicitudin eu suspendisse id sollicitudin. Tortor etiam orci leo sed libero. Ut nunc
                    vulputate aenean dui
                    purus
                    elementum libero malesuada. Id vitae vitae enim neque suspendisse enim eget aliquam odio. Donec
                    sit nunc massa
                    adipiscing. Aliquet natoque faucibus cursus quisque bibendum mi sapien luctus.
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading-3">
                <h5 class="title">
                  <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false"
                    aria-controls="collapse-3">
                    Ut nunc vulputate aenean dui purus elementum libero?
                  </a>
                </h5>
              </div>
              <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur. Dolor ornare sed lorem nam nisi et viverra adipiscing.
                    Sed diam nisl aliquam
                    proin sollicitudin eu suspendisse id sollicitudin. Tortor etiam orci leo sed libero. Ut nunc
                    vulputate aenean dui
                    purus
                    elementum libero malesuada. Id vitae vitae enim neque suspendisse enim eget aliquam odio. Donec
                    sit nunc massa
                    adipiscing. Aliquet natoque faucibus cursus quisque bibendum mi sapien luctus.
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading-4">
                <h5 class="title">
                  <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false"
                    aria-controls="collapse-4">
                    Ut nunc vulputate aenean dui purus elementum libero?
                  </a>
                </h5>
              </div>
              <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur. Dolor ornare sed lorem nam nisi et viverra adipiscing.
                    Sed diam nisl
                    aliquam
                    proin sollicitudin eu suspendisse id sollicitudin. Tortor etiam orci leo sed libero. Ut nunc
                    vulputate aenean
                    dui
                    purus
                    elementum libero malesuada. Id vitae vitae enim neque suspendisse enim eget aliquam odio. Donec
                    sit nunc massa
                    adipiscing. Aliquet natoque faucibus cursus quisque bibendum mi sapien luctus.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="faq-img">
          <img src="{{ url('website/images/faq-img.png') }}" class="img-responsive" alt="Icon" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->

@include('website.footer')