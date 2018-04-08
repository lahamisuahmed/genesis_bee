<!DOCTYPE html>
<html lang="en">
    @include('contents.header')
<body class="page">
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body"> 
  @include('contents.nav')
  <!-- PAGE HEADER -->
  <div class="page-header parallax" style="background-image:url({{ asset('images/page-bg2.jpg')}})">
        <h1>Get to know more about us</h1>
  </div>
  <div class="clearfix"></div>
  <!-- Start Content -->
  <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <div class="static-pages clearfix">
                            <h2>About Us</h2>
                            <hr class="md">
                            <span class="sub-title">Genesis and Bee Photography</span>
                            <p class="lead">Genesis and Bee Photography was founded by Baki Malik and Abdullahi.
                              We offer world class shots.
                            </p>
                            <div class="row">
                            <div class="col-md-6">
                                    <p>founded in Abuja in the year 2017 it is becoming the best to go for excellent shots 
                                    your satisfaction is what keeps us moving.</p>
                                </div>
                            <div class="col-md-6">
                                    <p>
                                      you can check our contact page for more information on how to get to reach us 
                                    </p>
                                </div>
                        </div>
                    </div>
                    </div>
                  <!-- Start Sidebar -->
                  <div class="col-md-4 sidebar">
                    <div class="widget sidebar-widget">
                      <h3 class="widgettitle">Our awesome team</h3>
                      <div class="about-box">
                        <div class="about-bg-image">
                                <img src=" {{asset('images/pic29.jpg')}}" alt="">
                            </div>
                        <div class="about-image">
                                <img src=" {{asset('images/abdullahi.jpg')}}" alt="">
                            </div>
                            <div class="about-cont">
                                <h4>Baki</h4>
                                <p>CEO, founder</p>
                            <ul class="social-icons inversed">
                                <li class="facebook"><a href="#"><i class="ico-social facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="ico-social twitter"></i></a></li>
                                <li class="instagram"><a href="#"><i class="ico-social instagram"></i></a></li>
                            </ul>
                            </div>
                      </div>
                      <div class="about-box">
                        <div class="about-bg-image">
                                <img src=" {{asset('images/pic32.jpg')}}" alt="">
                            </div>
                        <div class="about-image">
                                <img src=" {{asset('images/abdullahi.jpg')}}" alt="">
                            </div>
                            <div class="about-cont">
                                <h4>Abdullahi</h4>
                                <p>CEO, founder</p>
                            <ul class="social-icons inversed">
                                <li class="facebook"><a href="#"><i class="ico-social facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="ico-social twitter"></i></a></li>
                                <li class="instagram"><a href="#"><i class="ico-social instagram"></i></a></li>
                            </ul>
                            </div>
                      </div>
                    </div>
                    </div>
                </div>
          </div>
      </div>
  </div>
@include('contents.footer')
        
    </body>
</html>