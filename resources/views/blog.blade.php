 @extends('inc/master')

 @section('content')

     <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Blogs</h2>
          <span>Blogs</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{url('/')}}/asset/img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="date"><i class="lni-calendar"></i>10 April, 2018</div>
                <h3><a href="single-post.html">10 Tips to Design a High-converting Landing Page</a></h3>
                <div class="meta-tags">
                  <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                  <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                  <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                </div>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{url('/')}}/asset/img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="date"><i class="lni-calendar"></i>10 April, 2018</div>
                <h3><a href="single-post.html">How to Design a Website For Your App</a></h3>
                <div class="meta-tags">
                  <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                  <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                  <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                </div>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="{{url('/')}}/asset/img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <div class="date"><i class="lni-calendar"></i>10 April, 2018</div>
                <h3><a href="single-post.html">7 Secretes to Optimize Loading Speed of Your Site</a></h3>
                <div class="meta-tags">
                  <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                  <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                  <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                </div>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Clients Section -->
    <div id="clients" class="section">
      <!-- Container Ends -->
      <div class="container">
        <!-- Row and Scroller Wrapper Starts -->
        <div class="row" id="clients-scroller">
          <div class="client-item-wrapper">
            <img src="{{url('/')}}/asset/img/clients/img1.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="{{url('/')}}/asset/img/clients/img2.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="{{url('/')}}/asset/img/clients/img3.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="{{url('/')}}/asset/img/clients/img4.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="{{url('/')}}/asset/img/clients/img5.png" alt="">
          </div>
          <div class="client-item-wrapper">
            <img src="{{url('/')}}/asset/img/clients/img6.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Client Section End -->
@endsection