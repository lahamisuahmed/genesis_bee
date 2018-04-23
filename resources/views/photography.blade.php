<!DOCTYPE HTML>
<html class="no-js">

@include('contents.header')
<body class="gallery">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
  @include('contents.nav')
  <div class="clearfix"></div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
    		<ul class="grid-holder col2">
            	<li class="grid-item">
                	<a href="wedding_gallery">
                    	<img src="{{ asset('images/nslide2.jpg') }}" class="img-responsive" alt="">
                    	<span class="grid-hover">
                        	<span class="grid-hover-central">
                            <span class="grid-hover-inner">
                            		 
                            		<strong>Weddings</strong>
                            		
                         		</span>
                        	</span>
                     	</span>
                     	<span class="action-port">
                        	<span class="gallery-permalink pull-right">view gallery <i class="fa fa-long-arrow-right"></i></span>
                        	
                     	</span>
                 	</a>
              	</li>
                    <li class="grid-item">
                        <a href="wedding_gallery">
                            <img src="{{ asset('images/nslide1.jpg') }}" class="img-responsive" alt="">
                            <span class="grid-hover">
                                <span class="grid-hover-central">
                                <span class="grid-hover-inner">
                                         
                                        <strong>Events</strong>
                                        
                                    </span>
                                </span>
                            </span>
                            <span class="action-port">
                                <span class="gallery-permalink pull-right">view gallery <i class="fa fa-long-arrow-right"></i></span>
                                
                            </span>
                        </a>
                    </li>
            	<li class="grid-item">
                	<a href="wedding_gallery">
                    	<img src="{{ asset('images/nslide7.jpg') }}" class="img-responsive" alt="">
                    	<span class="grid-hover">
                        	<span class="grid-hover-central">
                            <span class="grid-hover-inner">
                            		 
                            		<strong>Life Style</strong>
                            		
                         		</span>
                        	</span>
                     	</span>
                     	<span class="action-port">
                        	<span class="gallery-permalink pull-right">view gallery <i class="fa fa-long-arrow-right"></i></span>
                        	
                     	</span>
                 	</a>
              	</li>
            	
            	
          	</ul>
    </div>
  </div>
	@include('contents.footer')
</body>

</html>