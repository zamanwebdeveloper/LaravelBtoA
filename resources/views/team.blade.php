@extends('inc/master')

@section('content')
 

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Team</h2>
          <span>Team</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="{{url('/')}}/asset/img/team/team1.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Jhon Doe</h4>
                  <p>Chief Technical Officer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="{{url('/')}}/asset/img/team/team2.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Luke Chesser</h4>
                  <p>Marketing Executive</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="{{url('/')}}/asset/img/team/team3.png" alt="">
              <div class="team-details">
                <div class="team-inner">                  
                  <h4 class="team-title">David Givens</h4>
                  <p>Business Manager</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="{{url('/')}}/asset/img/team/team4.png" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Annie Spratt</h4>
                  <p>Graphic Designer</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    @endsection