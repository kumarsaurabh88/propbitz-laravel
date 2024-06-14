@include('website.header')
<!--  -->
<div class="banner-section banner-area section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-6">
        <div class="banner-text">
          <h1 class="heading  wow animated slideInLeft" data-wow-delay="0.2s" data-wow-duration="1.1s">
            End-to-End
            Commercial <span> Real Estate Platform</span></h1>
          <p>Invest, Sell and Rent Commercial Real Estate
            backed <br /> by verified data.
          </p>
          <p>Start investing & earn returns <span>upto 14-16% IRR </span> </p>
          <div class="react-tabber">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"> Invest <i
                    class="fa-solid fa-caret-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"> Rent <i
                    class="fa-solid fa-caret-down"></i></a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tabs-1" role="tabpanel">
                <div class="tabber-content">
                  <div class="budget-section">
                    <div class="form-inner">
                      <div class="left-form">
                        <p>City</p>
                        <button class="toggle-text dropdown-toggles">
                          Gurugram <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="city-section">
                          <div class="city-inner">
                            <ul>
                              <li>Mumbai</li>
                              <li>Navi Mumbai</li>
                              <li>Thane</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="blank-area"></div>
                      <div class="right-form">
                        <form class="banner-form">
                          <div class="form-group">
                            <img class="seach-icon" src="{{url('website/images/search-icon2.png')}}" alt="Icon" />
                            <input type="password" class="form-control" placeholder="What locations do you prefer?" />
                          </div>
                          <button class="search-btn" type="submit">
                            <!-- <FontAwesomeIcon icon={faMagnifyingGlass} /> -->
                            <img src="{{url('website/images/search-icon.png')}}" alt="Icon" />
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="form-bottom">
                      <div class="left-btn">
                        <div class="middle-btn2">
                          <button class="budget-btn dropdown-toggles">
                            Budget <i class="fa-solid fa-caret-down"></i>
                          </button>
                          <div class="city-section">
                            <div class="city-inner range-budget">
                              <div class="price-range">
                                <div class="budget-range">
                                  <h4>Budget Range</h4>
                                  <div class="price-input">
                                    <div class="field">
                                      <span>0</span>
                                      <input type="number" class="input-min" value="2500">
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                      <span>0</span>
                                      <input type="number" class="input-max" value="7500">
                                    </div>
                                  </div>
                                  <div class="slider">
                                    <div class="progress"></div>
                                  </div>
                                  <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                  </div>
                                </div>
                                <div class="range-wrap">
                                  <button class="range-items">
                                    Above 40 Lakhs
                                  </button>
                                  <button class="range-items">
                                    Above 40 Lakhs
                                  </button>
                                  <button class="range-items">
                                    Above 40 Lakhs
                                  </button>
                                  <button class="range-items">
                                    Above 40 Lakhs
                                  </button>
                                  <button class="range-items">
                                    Above 40 Lakhs
                                  </button>
                                  <button class="range-items">
                                    Above 40 Lakhs
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="middle-btn">
                        <button class="budget-btn dropdown-toggles">
                          Assets Type <i class="fa-solid fa-caret-down"></i>
                          <span class="countNo">3</span>
                        </button>
                        <div class="city-section">
                          <div class="city-inner">
                            <div class="checkbox--inner">
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Fully Furnished
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Office
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Shop
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Bank
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Warehouse
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                School
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Retail
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane " id="tabs-2" role="tabpanel">
                <div class="tabber-content">
                  <div class="budget-section">
                    <div class="form-inner">
                      <div class="left-form">
                        <p>City</p>
                        <button class="toggle-text dropdown-toggles">
                          Gurugram <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="city-section">
                          <div class="city-inner">
                            <ul>
                              <li>Mumbai</li>
                              <li>Navi Mumbai</li>
                              <li>Thane</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="blank-area"></div>
                      <div class="right-form">
                        <form class="banner-form">
                          <div class="form-group">
                            <img class="seach-icon" src="{{url('website/images/search-icon2.png')}}" alt="Icon" />
                            <input type="password" class="form-control" placeholder="What locations do you prefer?" />
                          </div>
                          <button class="search-btn" type="submit">
                            <!-- <FontAwesomeIcon icon={faMagnifyingGlass} /> -->
                            <img src="{{url('website/images/search-icon.png')}}" alt="Icon" />
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="form-bottom">
                      <div class="left-btn">
                        <button class="budget-btn dropdown-toggles">
                          Office <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="city-section">
                          <div class="city-inner">
                            <ul>
                              <li>Office </li>
                              <li>Retail</li>
                              <li>Furnished</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="middle-btn">
                        <button class="budget-btn dropdown-toggles">
                          Furnishing Status <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="city-section">
                          <div class="city-inner">
                            <div class="checkbox--inner">
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Fully Furnished
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Semi Furnished
                              </div>
                              <div class="checkbox-item">
                                <input type="checkbox" name="" value="">
                                Un Furnished
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="middle-btn2">
                        <button class="budget-btn dropdown-toggles">
                          Carpet Area <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="city-section">
                          <div class="city-inner range-budget">
                            <div class="price-range">
                              <div class="budget-range">
                                <h4>Budget Range</h4>
                                <div class="price-input">
                                  <div class="field">
                                    <span>0</span>
                                    <input type="number" class="input-min" value="2500">
                                  </div>
                                  <div class="separator">-</div>
                                  <div class="field">
                                    <span>0</span>
                                    <input type="number" class="input-max" value="7500">
                                  </div>
                                </div>
                                <div class="slider">
                                  <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                  <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                  <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                                </div>
                              </div>
                              <div class="range-wrap">
                                <button class="range-items">
                                  Above 40 Lakhs
                                </button>
                                <button class="range-items">
                                  Above 40 Lakhs
                                </button>
                                <button class="range-items">
                                  Above 40 Lakhs
                                </button>
                                <button class="range-items">
                                  Above 40 Lakhs
                                </button>
                                <button class="range-items">
                                  Above 40 Lakhs
                                </button>
                                <button class="range-items">
                                  Above 40 Lakhs
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="wow animated slideInRight" data-wow-delay="0.5s">
          <div class="banner-img">
            <img src="{{url('website/images/building-img.png')}}" class="img-responsive" alt="Logo" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="counter-section  wow slideInUp" data-wow-duration="3.0s">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-9">
        <div class="counter-inner">
          <div class="left-counter">
            <p>AT A GLANCE</p>
            <h1 class="heading"> Commercial Property </h1>
          </div>
          <div class="left-divider"></div>
          <div class="right-counter">
            <div class="counter-areas counter">
              <div class="counter-wrap">
                <div class="counter-items">
                  <div class="item1">
                    <div class="count-up">
                      <i class="fa-solid fa-indian-rupee-sign"></i>
                      <h3 class="counter-count">2</h3>
                    </div>
                  </div>
                  <div class="item2">
                    Cr+
                  </div>
                </div>
                <p> Investments Enabled </p>
              </div>
              <div class="counter-wrap">
                <div class="counter-items">
                  <div class="item1">
                    <div class="count-up">
                      <h3 class="counter-count">2000</h3>
                    </div>
                  </div>
                  <div class="item2">
                    +
                  </div>
                </div>
                <p> Investments Enabled </p>
              </div>
              <div class="counter-wrap">
                <div class="counter-items">
                  <div class="item1">
                    <div class="count-up">
                      <i class="fa-solid fa-indian-rupee-sign"></i>
                      <h3 class="counter-count">100000</h3>
                    </div>
                  </div>
                  <div class="item2">
                  </div>
                </div>
                <p> </p>
              </div>
              <div class="counter-wrap">
                <div class="counter-items">
                  <div class="item1">
                  </div>
                  <div class="item2">
                  </div>
                </div>
                <p> Minimum <br />Investments </p>
              </div>
            </div>
          </div>
        </div>
        <ul class="counter-text">
          <li>
            <span> <img src="{{url('website/images/tick-icon.png')}}" alt="Icon" /> </span>
            <p>Predictable Returns</p>
          </li>
          <li>
            <span> <img src="{{url('website/images/tick-icon.png')}}" alt="Icon" /> </span>
            <p>Earn upto 11% Pre-Tax Yield</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="commercial-section section">
  <div class="container ">
    <div class="row">
      <div class="col-md-12 col-lg-6">
        <div class="commercial-text wow slideInLeft" data-wow-duration="3.0s">
          <span>ABOUT COMMERCIAL PROPERTY</span>
          <h2 class="heading"> What is Commercial <br> Property </h2>
          <ul>
            <li>
              <p>Grip has partnered with leading commercial property fractionalization platforms ("CRE
                Platforms") to
                provide investors these investment opportunities at a minimum investment amount of
                Rs.1,00,000
              </p>
            </li>
            <li>
              <p>Tenants are established MNCs with long lock-in/lease tenures, contracted rent
                escalations, and strong
                credit
              </p>
            </li>
          </ul>
          <div class="button-wrap">
            <a href="/" class="theme-btn">
              <span>START EARNING RETURNS</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="commercial-areas">
          <div class="commercial-items">
            <div class="left">
              <div class="top-section" style="opacity:0">
                <img src="{{url('website/images/properties-icon.png')}}" class="img-responsive" alt="Logo" />
                <p>Commercial Property</p>
              </div>
              <div class="botom-section">
                <p>Yield</p>
                <p>Repayment</p>
                <p>Volatility</p>
                <p>Predictable
                  Returns
                </p>
                <p>Security Cover</p>
              </div>
            </div>
            <div class="middle">
              <div class="top-section">
                <img src="{{url('website/images/properties-icon.png')}}" class="img-responsive" alt="Logo" />
                <p>Commercial Property</p>
              </div>
              <div class="botom-section">
                <p>Upto 11%</p>
                <p>Quarterly</p>
                <p>No</p>
                <p>Yes</p>
                <p>Yes</p>
              </div>
            </div>
            <div class="right">
              <div class="top-section">
                <img src="{{url('website/images/fix-deposit.png')}}" class="img-responsive" alt="Logo" />
                <p>Fixed Deposit</p>
              </div>
              <div class="botom-section">
                <p>6-8%</p>
                <p>End of Life</p>
                <p>No</p>
                <p>Yes</p>
                <p>Yes</p>
              </div>
            </div>
          </div>
          <!-- <div class="commercial-items">
                        <div class="middle">
                          <p>Upto 11%</p>
                        </div>
                        <div class="right">
                          <p>6-8%</p>
                        </div>
                        </div>
                        <div class="commercial-items">
                        <div class="left">
                        
                        </div>
                        <div class="middle">
                        </div>
                        <div class="right">
                          <p>End of Life</p>
                        </div>
                        </div>
                        <div class="commercial-items">
                        <div class="left">
                          <p>Volatility</p>
                        </div>
                        <div class="middle">
                          <p>No</p>
                        </div>
                        <div class="right">
                          <p>No</p>
                        </div>
                        </div>
                        <div class="commercial-items">
                        <div class="left">
                          <p>Predictable Returns</p>
                        </div>
                        <div class="middle">
                          <p>Yes</p>
                        </div>
                        <div class="right">
                          <p>Yes</p>
                        </div>
                        </div>
                        <div class="commercial-items">
                        <div class="left">
                          <p>Security Cover</p>
                        </div>
                        <div class="middle">
                          <p>Yes</p>
                        </div>
                        <div class="right">
                          <p>Yes</p>
                        </div>
                        </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="realState-wrapper section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="state-section">
          <div class="top-section">
            <h2 class="heading"> Why Commercial Real Estate </h2>
            <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse<br /> pulvinar
              ut. Non
              imperdiet orci faucibus.
            </p>
          </div>
          <div class="realState-service">
            <div class="row ">
              <div class="col-6 col-sm-6 col-lg-3">
                <div class="realState-text wow fadeInRight" data-wow-delay="0.2s">
                  <div class="icon">
                    <img src="{{url('website/images/stateble.png')}}" class="img-responsive" alt="Logo" />
                  </div>
                  <p>Stable Asset <br /> Class</p>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3">
                <div class="realState-text  wow fadeInRight" data-wow-delay="0.3s">
                  <div class="icon">
                    <img src="{{url('website/images/cashflow.png')}}" class="img-responsive" alt="Logo" />
                  </div>
                  <p>Monthly <br /> Cashflow</p>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3">
                <div class="realState-text  wow fadeInRight" data-wow-delay="0.4s">
                  <div class="icon">
                    <img src="{{url('website/images/capital.png')}}" class="img-responsive" alt="Logo" />
                  </div>
                  <p>Capital <br /> Appreciation</p>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-lg-3">
                <div class="realState-text  wow fadeInRight" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{url('website/images/portfolio.png')}}" class="img-responsive" alt="Logo" />
                  </div>
                  <p>Portfolio <br /> Diversification</p>
                </div>
              </div>
            </div>
          </div>
          <div class="state-img">
            <img src="{{url('website/images/state-img.png')}}" alt="Icon" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="trending-section section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="top-section">
          <h2 class="heading">Trending Commercial Properties For <i>Sale</i> </h2>
          <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse <br /> pulvinar ut.
            Non
            imperdiet orci faucibus.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-area">
    <div class="buttons-section">
      <a class="theme-btn trasparent-btn" href="#"><span> EXPLORE PROPERTIES </span><i class="fa-solid fa-arrow-right">
        </i> </a>
    </div>
    <div class="trending-sliders">
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Bengaluru New TechPark, Hosur</h4>
            <div class="content-details">
              <div class="left">
                <p>Avg. Rental Yield</p>
                <strong>8.9%</strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <span>₹32 Cr</span>
                <p>Property Value</p>
              </div>
              <div class="blank-space"></div>
              <div class="right">
                <span class="icon"> <img src="{{url('website/images/pro-icon.png')}}" alt="Icon" /> 552</span>
                <p> People are interested</p>
              </div>
            </div>
            <strong class="monthly">
              Monthly Rental:
              <FontAwesomeIcon icon={faIndianRupeeSign} />
              9.25 L.
            </strong>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>INVEST NOW</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span>ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Bengaluru New TechPark, Hosur</h4>
            <div class="content-details">
              <div class="left">
                <p>Avg. Rental Yield</p>
                <strong>8.9%</strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <span>₹32 Cr</span>
                <p>Property Value</p>
              </div>
              <div class="blank-space"></div>
              <div class="right">
                <span class="icon"> <img src="{{url('website/images/pro-icon.png')}}" alt="Icon" /> 552</span>
                <p> People are interested</p>
              </div>
            </div>
            <strong class="monthly">
              Monthly Rental:
              <FontAwesomeIcon icon={faIndianRupeeSign} />
              9.25 L.
            </strong>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>INVEST NOW</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span>ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Bengaluru New TechPark, Hosur</h4>
            <div class="content-details">
              <div class="left">
                <p>Avg. Rental Yield</p>
                <strong>8.9%</strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <span>₹32 Cr</span>
                <p>Property Value</p>
              </div>
              <div class="blank-space"></div>
              <div class="right">
                <span class="icon"> <img src="{{url('website/images/pro-icon.png')}}" alt="Icon" /> 552</span>
                <p> People are interested</p>
              </div>
            </div>
            <strong class="monthly">
              Monthly Rental:
              <FontAwesomeIcon icon={faIndianRupeeSign} />
              9.25 L.
            </strong>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>INVEST NOW</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span>ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Bengaluru New TechPark, Hosur</h4>
            <div class="content-details">
              <div class="left">
                <p>Avg. Rental Yield</p>
                <strong>8.9%</strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <span>₹32 Cr</span>
                <p>Property Value</p>
              </div>
              <div class="blank-space"></div>
              <div class="right">
                <span class="icon"> <img src="{{url('website/images/pro-icon.png')}}" alt="Icon" /> 552</span>
                <p> People are interested</p>
              </div>
            </div>
            <strong class="monthly">
              Monthly Rental:
              <FontAwesomeIcon icon={faIndianRupeeSign} />
              9.25 L.
            </strong>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>INVEST NOW</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span>ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="commercial-section commercial-section2 section">
  <div class="container max-container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="top-section">
          <h2 class="heading">Preleased Commercial Properties</h2>
          <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse <br> pulvinar ut.
            Non
            imperdiet orci faucibus.
          </p>
        </div>
      </div>
    </div>
    <div class="commercial-col">
      <div class="row">
        <div class="commercial-buid wow fadeInLeft" data-wow-delay="0.2s">
          <div class="commercial-inner">
            <div class="image">
              <img src="{{url('website/images/properties1.png')}}" class="img-responsive" alt="Logo" />
            </div>
            <div class="content">
              <div class="content-inner">
                <p>Office</p>
                <span><i class="fa-solid fa-arrow-right"></i> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="commercial-buid wow fadeInLeft" data-wow-delay="0.3s">
          <div class="commercial-inner">
            <div class="image">
              <img src="{{url('website/images/properties2.png')}}" class="img-responsive" alt="Logo" />
            </div>
            <div class="content">
              <div class="content-inner">
                <p>Bank</p>
                <span><i class="fa-solid fa-arrow-right"></i> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="commercial-buid wow fadeInLeft" data-wow-delay="0.4s">
          <div class="commercial-inner">
            <div class="image">
              <img src="{{url('website/images/properties3.png')}}" class="img-responsive" alt="Logo" />
            </div>
            <div class="content">
              <div class="content-inner">
                <p>Warehouse</p>
                <span><i class="fa-solid fa-arrow-right"></i> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="commercial-buid wow fadeInLeft" data-wow-delay="0.5s">
          <div class="commercial-inner">
            <div class="image">
              <img src="{{url('website/images/properties4.png')}}" class="img-responsive" alt="Logo" />
            </div>
            <div class="content">
              <div class="content-inner">
                <p>Retail</p>
                <span><i class="fa-solid fa-arrow-right"></i> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="commercial-buid wow fadeInLeft" data-wow-delay="0.6s">
          <div class="commercial-inner">
            <div class="image">
              <img src="{{url('website/images/properties5.png')}}" class="img-responsive" alt="Logo" />
            </div>
            <div class="content">
              <div class="content-inner">
                <p>School</p>
                <span><i class="fa-solid fa-arrow-right"></i> </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="propbitz-section section ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-4">
        <div class="propbitz-text1">
          <h2 class="heading"> Propbitz <br> Advantage </h2>
          <p>Propbitz investors get exclusive access to our curated opportunities and enjoy a range of
            advantages.</p>
        </div>
      </div>
      <div class="col-md-12 col-lg-8">
        <div class="row">
          <div class="col-sm-6">
            <div class="propbitz-text">
              <div class="icon">
                <img src="{{url('website/images/data-icon.png')}}" alt="Icon" />
              </div>
              <strong>Data-Driven</strong>
              <p>We leverage data and on-the-ground experience to identify and list only the best
                opportunities.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="propbitz-text">
              <div class="icon">
                <img src="{{url('website/images/transparency.png')}}" alt="Icon" />
              </div>
              <strong>Complete Transparency</strong>
              <p>Our investment process is completely transparent and comes with detailed reporting at
                every step of
                the day.
              </p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="propbitz-text">
              <div class="icon">
                <img src="{{url('website/images/management-icon.png')}}" alt="Icon" />
              </div>
              <strong>End to End Management</strong>
              <p>We manage the asset from acquisition to exit. Investors enjoy a hands-off investment
                experience.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="propbitz-text">
              <div class="icon">
                <img src="{{url('website/images/exp-icon.png')}}" alt="Icon" />
              </div>
              <strong>Fully Digital Experience</strong>
              <p>Investing with Propbitz is completely online, no physical paperwork. Invest and track
                your portfolio
                anytime.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!--  -->
<section class="business-section section ">
  <div class="wow fadeInUp" data-wow-delay="0.1s">
    <div class="container max-container">
      <div class="business-inner">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-6">
            <div class="business-text">
              <h2 class="heading">Uncover the Perfect <br> Setting for Your <br> Business Operations!</h2>
              <ul>
                <li>
                  <p> <i class="fa-solid fa-arrow-right"></i> 5X Faster & Smooth Execution</p>
                </li>
                <li>
                  <p><i class="fa-solid fa-arrow-right"></i> Get Personal Assistance</p>
                </li>
                <li>
                  <p><i class="fa-solid fa-arrow-right"></i> Save on Brokerage <sup> * </sup></p>
                </li>
              </ul>
              <div class="button-wraps">
                <a class="theme-btn" href="#"> <span>Get Started Now </span><span class="free">FREE!</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="faster-section">
              <div class="faster-blank"></div>
              <div class="faster-blank2"></div>
              <div class="faster-inner">
                <p>Multiple Options</p>
                <h2 class="heading">3x Faster</h2>
                <div class="faster-btn">
                  <a href="#" class="theme-btn"> <span>BETTER DEAL! </span></a>
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="trending-section trending-rent section">
  <div class="container max-container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="top-section">
          <h2 class="heading">Trending Commercial Properties For Rent </h2>
          <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse <br /> pulvinar ut.
            Non
            imperdiet orci faucibus.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-area">
    <div class="buttons-section">
      <a class="theme-btn trasparent-btn" href="#"> <span>EXPLORE PROPERTIES</span> <i class="fa-solid fa-arrow-right">
        </i> </a>
    </div>
    <div class="trending-sliders">
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Whitefield Tech Park Complex, Bangalore</h4>
            <strong class="budget-wrap"> <i class="fa-solid fa-indian-rupee-sign"></i> 1,65,878/month
            </strong>
            <div class="content-details">
              <div class="left">
                <p>Current Status</p>
                <strong>Unfurnished</strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <p>Carpet Area </p>
                <strong>415 sq. ft.</strong>
              </div>
            </div>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>SHORTLIST</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span><i class="fa-brands fa-whatsapp"></i> ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Whitefield Tech Park Complex, Bangalore</h4>
            <strong class="budget-wrap"> <i class="fa-solid fa-indian-rupee-sign"></i> 2,32,996/month
            </strong>
            <div class="content-details">
              <div class="left">
                <p>Current Status</p>
                <strong>Fully Furnished </strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <p>Carpet Area </p>
                <strong>1,238 sq. ft.</strong>
              </div>
            </div>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>SHORTLIST</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span><i class="fa-brands fa-whatsapp"></i> ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Whitefield Tech Park Complex, Bangalore</h4>
            <strong class="budget-wrap"> <i class="fa-solid fa-indian-rupee-sign"></i> 2,32,996/month
            </strong>
            <div class="content-details">
              <div class="left">
                <p>Current Status</p>
                <strong>Fully Furnished </strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <p>Carpet Area </p>
                <strong>1,238 sq. ft.</strong>
              </div>
            </div>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>SHORTLIST</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span><i class="fa-brands fa-whatsapp"></i> ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Whitefield Tech Park Complex, Bangalore</h4>
            <strong class="budget-wrap"> <i class="fa-solid fa-indian-rupee-sign"></i> 2,32,996/month
            </strong>
            <div class="content-details">
              <div class="left">
                <p>Current Status</p>
                <strong>Fully Furnished </strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <p>Carpet Area </p>
                <strong>1,238 sq. ft.</strong>
              </div>
            </div>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>SHORTLIST</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span><i class="fa-brands fa-whatsapp"></i> ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="trending-slider">
          <div class="trend-inner-slider">
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
            <div class="image-slider">
              <div class="image-section">
                <div class="img">
                  <img src="{{url('website/images/trending-slider1.png')}}" alt="Icon" />
                </div>
                <div class="category">
                  <ul class="category-item">
                    <li><span>Pre-leased</span></li>
                    <li><span>Office</span></li>
                  </ul>
                  <a class="filter-icon" href="/">
                    <img src="{{url('website/images/filter-icon.png')}}" alt="Icon" />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content">
            <h4>Whitefield Tech Park Complex, Bangalore</h4>
            <strong class="budget-wrap"> <i class="fa-solid fa-indian-rupee-sign"></i> 2,32,996/month
            </strong>
            <div class="content-details">
              <div class="left">
                <p>Current Status</p>
                <strong>Fully Furnished </strong>
              </div>
              <div class="blank-space"></div>
              <div class="middle">
                <p>Carpet Area </p>
                <strong>1,238 sq. ft.</strong>
              </div>
            </div>
            <div class="tre-button">
              <div class="invest-btn">
                <a class="theme-btn" href="/">
                  <span>SHORTLIST</span>
                </a>
              </div>
              <div class="en-btn">
                <a class="theme-btn" href="/">
                  <span> <i class="fa-brands fa-whatsapp"></i> ENQUIRE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="intelligence-section section">
  <div class="container max-container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="top-section">
          <h2 class="heading">Propbitz Intelligence </h2>
          <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse <br> pulvinar ut.
            Non
            imperdiet orci faucibus.
          </p>
        </div>
      </div>
    </div>
    <div class="buttons-section">
      <a class="theme-btn trasparent-btn" href="#"><span><img src="{{url('website/images/query-img.png')}}" alt="Icon"
            class="img-responsive query-img" /> I HAVE A SPECIFIC QUERY
          <i class="fa-solid fa-arrow-right"> </i> </span></a>
    </div>
    <div class="intelligence-slider">
      <div class="intelligence-box">
        <div class="box-inner">
          <div class="box-items">
            <div class="left">
              <img src="{{url('website/images/intelligence1.png')}}" alt="Icon" class="img-responsive" />
            </div>
            <div class="right">
              <div class="right-inner">
                <div class="top-section">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <span>Yelahanka, Bengaluru</span>
                </div>
                <div class="blank-sec"></div>
                <h2 class="heading">Brigade Tech Park Center</h2>
              </div>
            </div>
          </div>
          <div class="devider"></div>
          <div class="content">
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="inte-btn">
              <a href="#" class="theme-btn"> <span>View Detailed Insights <i class="fa-solid fa-arrow-right"></i>
                </span> </a>
            </div>
          </div>
        </div>
        <div class="box-inner">
          <div class="box-items">
            <div class="left">
              <img src="{{url('website/images/intelligence1.png')}}" alt="Icon" class="img-responsive" />
            </div>
            <div class="right">
              <div class="right-inner">
                <div class="top-section">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <span>Yelahanka, Bengaluru</span>
                </div>
                <div class="blank-sec"></div>
                <h2 class="heading">Brigade Tech Park Center</h2>
              </div>
            </div>
          </div>
          <div class="devider"></div>
          <div class="content">
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="inte-btn">
              <a href="#" class="theme-btn"> <span>View Detailed Insights <i class="fa-solid fa-arrow-right"></i>
                </span> </a>
            </div>
          </div>
        </div>
        <div class="box-inner">
          <div class="box-items">
            <div class="left">
              <img src="{{url('website/images/intelligence1.png')}}" alt="Icon" class="img-responsive" />
            </div>
            <div class="right">
              <div class="right-inner">
                <div class="top-section">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <span>Yelahanka, Bengaluru</span>
                </div>
                <div class="blank-sec"></div>
                <h2 class="heading">Brigade Tech Park Center</h2>
              </div>
            </div>
          </div>
          <div class="devider"></div>
          <div class="content">
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="inte-btn">
              <a href="#" class="theme-btn"> <span>View Detailed Insights <i class="fa-solid fa-arrow-right"></i>
                </span> </a>
            </div>
          </div>
        </div>
        <div class="box-inner">
          <div class="box-items">
            <div class="left">
              <img src="{{url('website/images/intelligence1.png')}}" alt="Icon" class="img-responsive" />
            </div>
            <div class="right">
              <div class="right-inner">
                <div class="top-section">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <span>Yelahanka, Bengaluru</span>
                </div>
                <div class="blank-sec"></div>
                <h2 class="heading">Brigade Tech Park Center</h2>
              </div>
            </div>
          </div>
          <div class="devider"></div>
          <div class="content">
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="inte-btn">
              <a href="#" class="theme-btn"> <span>View Detailed Insights <i class="fa-solid fa-arrow-right"></i>
                </span> </a>
            </div>
          </div>
        </div>
        <div class="box-inner">
          <div class="box-items">
            <div class="left">
              <img src="{{url('website/images/intelligence1.png')}}" alt="Icon" class="img-responsive" />
            </div>
            <div class="right">
              <div class="right-inner">
                <div class="top-section">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <span>Yelahanka, Bengaluru</span>
                </div>
                <div class="blank-sec"></div>
                <h2 class="heading">Brigade Tech Park Center</h2>
              </div>
            </div>
          </div>
          <div class="devider"></div>
          <div class="content">
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="inte-btn">
              <a href="#" class="theme-btn"> <span>View Detailed Insights <i class="fa-solid fa-arrow-right"></i>
                </span> </a>
            </div>
          </div>
        </div>
        <div class="box-inner">
          <div class="box-items">
            <div class="left">
              <img src="{{url('website/images/intelligence1.png')}}" alt="Icon" class="img-responsive" />
            </div>
            <div class="right">
              <div class="right-inner">
                <div class="top-section">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <span>Yelahanka, Bengaluru</span>
                </div>
                <div class="blank-sec"></div>
                <h2 class="heading">Brigade Tech Park Center</h2>
              </div>
            </div>
          </div>
          <div class="devider"></div>
          <div class="content">
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="content-inner">
              <div class="left">
                <p>Lease Duration</p>
                <strong>7 years</strong>
              </div>
              <div class="right">
                <p>Asset Type</p>
                <strong>Commercial</strong>
              </div>
            </div>
            <div class="inte-btn">
              <a href="#" class="theme-btn"> <span>View Detailed Insights <i class="fa-solid fa-arrow-right"></i>
                </span> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="officeSpace-wrap section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="office-inner wow fadeInRight" data-wow-delay="0.3s">
          <div class="office-wrap">
            <h1 class="heading">Sell your Commercial Property with Zero Hassle</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse.</p>
            <div class="office-btn">
              <a href="#" class="theme-btn trasparent-btn"> <span>List Your Property </span></a>
            </div>
          </div>
          <img src="{{url('website/images/sell-img.png')}}" class="img-responsive sell-img" alt="Logo" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="office-inner office-inner2  wow fadeInRight" data-wow-delay="0.4s">
          <div class="office-wrap">
            <h1 class="heading">Prime Office Spaces that Perfectly Fit Your Requirements</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse.</p>
            <div class="office-btn">
              <a href="#" class="theme-btn trasparent-btn"> <span>List Your Property </span></a>
            </div>
          </div>
          <img src="{{url('website/images/sell-build.png')}}" class="img-responsive sell-img" alt="Logo" />
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="investor-wrap section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="investor-inner">
          <div class="investor-bg">
            <h5 class="bcnd-head"><span>Backed by Leading Investors</span></h5>
            <p><strong>Propbitz</strong> is <strong>backed</strong> by marquee venture capital investors
              from the
              <strong>US, Japan</strong> and <strong>India</strong>.
            </p>
            <div class="brand-logo">
              <div class="brand-col">
                <img src="{{url('website/images/lightspeed.png')}}" alt="Icon" class="img-responsive" />
              </div>
              <div class="brand-col">
                <img src="{{url('website/images/elevation.png')}}" alt="Icon" class="img-responsive" />
              </div>
              <div class="brand-col">
                <img src="{{url('website/images/mayfield.png')}}" alt="Icon" class="img-responsive" />
              </div>
              <div class="brand-col">
                <img src="{{url('website/images/beenest.png')}}" alt="Icon" class="img-responsive" />
              </div>
              <div class="brand-col">
                <img src="{{url('website/images/kotak.png')}}" alt="Icon" class="img-responsive" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="testimonial-wrap section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="top-section">
          <h2 class="heading">Propbitz Happy Investors & Sellers </h2>
          <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse <br> pulvinar ut.
            Non
            imperdiet
            orci faucibus.
          </p>
        </div>
      </div>
    </div>
    <div class="testimonial-slider">
      <div class="testimonial-items">
        <div class="testimonial-col">
          <div class="left">
            <div class="image-wraps">
              <div class="video_container">
                <video class='video' poster='website/images/testimonial-img.png' )}}'>
                  <source src='https://www.w3schools.com/html/mov_bbb.mp4' type='video/mp4'>
                </video>
                <button type="button" class="play_button">
                  <img src="{{url('website/images/play-icon.png')}}" alt="Play Button"
                    style="width: 26px;display: inline;" /> PLAY VIDEO
                </button>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="testimonial-content">
              <div class="name">Shruti Nishank</div>
              <p class="des">Financial Advisor</p>
              <div class="testimonial-review">
                <div class="quotes-icon">
                  <i class="fa-solid fa-quote-left"></i>
                </div>
                <div class="review-img">
                  <img src="{{url('website/images/kotak-img.png')}}" class="img-responsive" alt="Logo" />
                </div>
                <div class="review-icon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse pulvinar
                  ut. Non
                  imperdiet orci faucibus.
                  Turpis imperdiet egestas suspendisse pulvinar utTurpis imperdiet egestas suspendisse
                  pulvinar ut.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-items">
        <div class="testimonial-col">
          <div class="left">
            <div class="image-wraps">
              <div class="video_container">
                <video class='video' poster='website/images/testimonial-img.png' )}}'>
                  <source src='https://www.w3schools.com/html/mov_bbb.mp4' type='video/mp4'>
                </video>
                <button type="button" class="play_button">
                  <img src="{{url('website/images/play-icon.png')}}" alt="Play Button" style="width: 26px;" /> PLAY
                  VIDEO
                </button>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="testimonial-content">
              <div class="name">Shruti Nishank</div>
              <p class="des">Financial Advisor</p>
              <div class="testimonial-review">
                <div class="quotes-icon">
                  <i class="fa-solid fa-quote-left"></i>
                </div>
                <div class="review-img">
                  <img src="{{url('website/images/kotak-img.png')}}" class="img-responsive" alt="Logo" />
                </div>
                <div class="review-icon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse pulvinar
                  ut. Non
                  imperdiet orci faucibus.
                  Turpis imperdiet egestas suspendisse pulvinar utTurpis imperdiet egestas suspendisse
                  pulvinar ut.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="featured-wrap section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="top-section">
          <h2 class="heading">Featured In </h2>
          <p>Lorem ipsum dolor sit amet consectetur. Turpis imperdiet egestas suspendisse pulvinar ut. Non
            imperdiet
            orci faucibus.
          </p>
        </div>
      </div>
    </div>
    <div class="featured-slider">
      <div class="featured-col">
        <div class="featured-item black-bg">
          <div class="icon">
            <img src="{{url('website/images/forbes.png')}}" class="img-responsive " alt="Logo" />
          </div>
          <div class="content">
            <p>Three Ways Commercial Real Estate Projects Against Inflation</p>
          </div>
        </div>
      </div>
      <div class="featured-col">
        <div class="featured-item ">
          <div class="icon">
            <img src="{{url('website/images/the-hindu.png')}}" class="img-responsive " alt="Logo" />
          </div>
          <div class="content">
            <p>Alternative investments: Championing transformation of investment landscape</p>
          </div>
        </div>
      </div>
      <div class="featured-col">
        <div class="featured-item blue-bg">
          <div class="icon">
            <img src="{{url('website/images/times-now.png')}}" class="img-responsive " alt="Logo" />
          </div>
          <div class="content">
            <p>Propbitz acquires Bengaluru’s Iconic Café Coffee Day headquarters</p>
          </div>
        </div>
      </div>
      <div class="featured-col">
        <div class="featured-item">
          <div class="icon">
            <img src="{{url('website/images/forbes.png')}}" class="img-responsive " alt="Logo" />
          </div>
          <div class="content">
            <p>Three Ways Commercial Real Estate Projects Against Inflation</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  -->

@include('website.footer')