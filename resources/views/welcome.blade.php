<!DOCTYPE HTML>
<html class="no-js">
    @include('contents.header')

    <body class="fs">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <div class="body"> 
      @include('contents.nav')
      <div class="clearfix"></div>
      <!-- Start Content -->
      <div class="main" role="main">
          <div class="slider-rev-cont">
              <div class="tp-banner-container">
                <div class="tp-banner-full">
                  <ul>
                    <!-- SLIDE  -->
                    <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade"> 
                      <!-- MAIN IMAGE --> 
                      <img src="images/nslide1.jpg" alt=""> 
                      
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption small_light_white fade tp-resizeme"
                          data-x="right"
                            data-hoffset="-20"
                          data-y="bottom" 
                          data-speed="1000"
                          data-start="300"
                          data-easing="Power3.easeInOut"
                          data-endspeed="300"
                          style="z-index: 5">&copy; Genesis & Bee</div>
                      <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr whiter tp-resizeme"
                            data-x="left"
                            data-hoffset="25"
                            data-y="center"
                            data-voffset="-100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <h4>Awesome</h4>
                        </div>
                      <!-- LAYER NR. 3 -->
                        <div class="tp-caption sfr whiter tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="center"
                            data-voffset="-40"
                            data-speed="1000"
                            data-start="600"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <h1>Full Screen</h1>
                        </div>
                      <!-- LAYER NR. 4 -->
                        <div class="tp-caption sfr whiter tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="center"
                            data-voffset="40"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <h2>Portfolio Images</h2>
                        </div>
                      <!-- LAYER NR. 5 -->
                      <div class="tp-caption customin whiter tp-resizeme"
                          data-x="left"
                            data-hoffset="20"
                          data-y="center"
                            data-voffset="80"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 50%;"
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                      
                          data-start="1500"
                          data-speed="600"
                          data-easing="Linear.easeNone"
                          data-endspeed="600"
                          data-endeasing="Linear.easeNone"
                          ><hr class="md">
                      </div>
                      <!-- LAYER NR. 6 -->
                        <div class="tp-caption sfr whiter tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="center"
                            data-voffset="120"
                            data-speed="1000"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <a href="{{route('gallery')}}" class="btn btn-lg btn-default">See Galleries</a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade"> 
                      <!-- MAIN IMAGE --> 
                      <img src="images/nslide2.jpg" alt=""> 
                      
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption small_light_white fade tp-resizeme"
                          data-x="right"
                            data-hoffset="-20"
                          data-y="bottom" 
                          data-speed="1000"
                          data-start="300"
                          data-easing="Power3.easeInOut"
                          data-endspeed="300"
                          style="z-index: 5">&copy; Genesis & Bee</div>
                      <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr darker tp-resizeme"
                            data-x="right"
                            data-hoffset="-15"
                            data-y="center"
                            data-voffset="-100"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <h4>Amazingly</h4>
                        </div>
                      <!-- LAYER NR. 3 -->
                        <div class="tp-caption sfr darker tp-resizeme"
                            data-x="right"
                            data-hoffset="-20"
                            data-y="center"
                            data-voffset="-60"
                            data-speed="1000"
                            data-start="600"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <h2>Styled Galleries</h2>
                        </div>
                      <!-- LAYER NR. 4 -->
                        <div class="tp-caption sfr darker tp-resizeme"
                            data-x="right"
                            data-hoffset="-20"
                            data-y="center"
                            data-voffset="20"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <p class="text-align-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Nulla convallis egestas rhoncus. Donec facilisis fermentum<br>sem, ac viverra ante luctus vel.</p>
                        </div>
                      <!-- LAYER NR. 5 -->
                      <div class="tp-caption customin darker customout tp-resizeme"
                          data-x="right"
                            data-hoffset="-20"
                          data-y="center"
                            data-voffset="80"
                          data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 50%;"
                          data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                      
                          data-start="1500"
                          data-speed="600"
                          data-easing="Linear.easeNone"
                          data-endspeed="600"
                          data-endeasing="Linear.easeNone"
                          ><hr class="md">
                      </div>
                      <!-- LAYER NR. 6 -->
                        <div class="tp-caption sfr darker tp-resizeme"
                            data-x="right"
                            data-hoffset="-20"
                            data-y="center"
                            data-voffset="120"
                            data-speed="1000"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">
                            <a href="{{route('gallery')}}" class="btn btn-lg btn-default">See Galleries</a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-delay="6000" data-masterspeed="600" data-slotamount="7" data-transition="fade"> 
                      <!-- MAIN IMAGE --> 
                      <img src="images/nslide4.jpg" alt=""> 
                      
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption small_light_white fade tp-resizeme"
                          data-x="right"
                            data-hoffset="-20"
                          data-y="bottom" 
                          data-speed="1000"
                          data-start="300"
                          data-easing="Power3.easeInOut"
                          data-endspeed="300"
                          style="z-index: 5">&copy; Genesis & Bee</div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption with_colored_background sfl tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="100"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">MULTIPLE HOMEPAGE STYLES
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption with_white_background sfl tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="160"
                            data-speed="500"
                            data-start="1400"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">KENBURNS SLIDESHOW
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption with_white_background sfl tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="220"
                            data-speed="500"
                            data-start="2100"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">FULL SCREEN SLIDESHOW
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption with_white_background sfl tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="280"
                            data-speed="500"
                            data-start="2800"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">VIDEO BACKGROUND
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption with_white_background sfl tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="340"
                            data-speed="500"
                            data-start="3500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">GALLERIES GRID
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption with_white_background sfl tp-resizeme"
                            data-x="left"
                            data-hoffset="20"
                            data-y="400"
                            data-speed="500"
                            data-start="4200"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="off"
                            style="z-index: 6">GALLERIES MASONRY
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade"> 
                      <!-- MAIN IMAGE --> 
                      <img src="images/nslide4.jpg" alt=""> 
                      
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption small_light_white fade tp-resizeme"
                          data-x="right"
                            data-hoffset="-20"
                          data-y="bottom" 
                          data-speed="1000"
                          data-start="300"
                          data-easing="Power3.easeInOut"
                          data-endspeed="300"
                          style="z-index: 5">&copy; Genesis & Bee</div>
                    </li>
                  </ul>
                </div>
            </div>
          </div>
      </div>

        @include('contents.footer')

    </body>

<!-- Mirrored from html.imithemes.com/cameroll/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 03:44:24 GMT -->
</html>