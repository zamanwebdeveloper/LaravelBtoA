@extends('inc/master')

@section('content')
 

    <!-- Subcribe Section Start -->
    <div id="subscribe" class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="subscribe-form">
              <div class="form-wrapper">
                <div class="sub-title text-center">
                  <h3>Subscribe to Newsletter</h3>
                  <p>Weekly Freebies and More!</p>
                </div>
                <form>
                  <div class="row">
                    <div class="col-12 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-12 form-line">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div> 
                    </div>
                    <div class="col-12">
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common btn-effect">Subscribe Now</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="sub-item-box">
              <div class="icon-box">
                <i class="lni-bullhorn"></i>
              </div>
              <div class="text-box">
                <h4>Weekly Free Learning Materials</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.</p>
              </div>
            </div>
            <div class="sub-item-box">
              <div class="icon-box">
                <i class="lni-book"></i>
              </div>
              <div class="text-box">
                <h4>Free PDF to Get Started</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.</p>
              </div>
            </div>
            <div class="sub-item-box">
              <div class="icon-box">
                <i class="lni-timer"></i>
              </div>
              <div class="text-box">
                <h4>10% Instant Discount</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subcribe Section End -->


    @endsection