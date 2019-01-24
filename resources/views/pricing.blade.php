@extends('inc/master')

@section('content')
 

    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Pricing Plans</h2>
          <span>Pricing</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>

        <div class="row pricing-tables">
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Starter Plan</h2>
                <div class="price">49$ <span>/mo</span></div>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                  <li> - </li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common btn-effect">Get Plan</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table pricing-big">
              <div class="pricing-details">
                <h2>Popular Plan</h2>
                <div class="price">99$ <span>/mo</span></div>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                  <li> - </li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common btn-effect">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <h2>Premium Plan</h2>
                <div class="price">199$ <span>/mo</span></div>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                  <li>Suspendisse quis metus</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common btn-effect">Buy Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->

        <!-- Counter Section Start -->
    <div class="counters section bg-defult">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item"> 
              <div class="icon">
                <i class="lni-rocket"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">100</span>%</h3>
                <h4>Faster</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-coffee-cup"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">700</span></h3>
                <h4>Cup of Coffee</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-user"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">10000</span>+</h3>
                <h4>Active Clients</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>                
              <div class="fact-count">
                <h3><span class="counter">1689</span></h3>
                <h4>Peoples Love</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="{{url('/')}}/asset/img/testimonial/img1.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Johnathan Doe</a></h2>
                      <span>Marketing Head Matrix media</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="{{url('/')}}/asset/img/testimonial/img2.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Oidila Matik</a></h2>
                      <span>President Lexo Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="{{url('/')}}/asset/img/testimonial/img3.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">- Alex Dattilo</a></h2>
                      <span>CEO Optima Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="{{url('/')}}/asset/img/testimonial/img2.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">Oidila Matik</a></h2>
                      <span>President Lexo Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="{{url('/')}}/asset/img/testimonial/img1.jpg" alt="">
                    </div>
                    <div class="author-info">
                      <h2><a href="#">- Alex Dattilo</a></h2>
                      <span>CEO Optima Inc</span>
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star-filled"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                    <span><i class="lni-star"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End --> 

    <!-- Call To Action Section Start -->
    <section id="cta" class="section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">            
            <div class="cta-text">
              <h5>Stil confused? Download a free lite version to get started!</h5>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 text-right">
            <a href="#" class="btn btn-border">Download</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Section End -->

    @endsection