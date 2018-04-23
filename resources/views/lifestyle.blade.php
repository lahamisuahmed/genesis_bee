<!DOCTYPE HTML>
<html class="no-js">

@include('contents.header')
<body class="gallery">
<!--[if lt IE 7]>
	<p class="chrome frame">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body"> 
  @include('contents.nav')
  <div class="clearfix"></div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
   		<div class="page-actions-block">
   			<div class="container">
            	<h2>Life Style</h2>
            	<div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="gallery-feedbacks">
                    <!-- <li><a href="#"><i class="fa fa-heart"></i> 45</a></li>
                    <li><a href="#" class="description-opener closed"><i class="fa fa-info"></i></a></li>
                    <li class="share-expander"><a href="#"><i class="fa fa-share-alt"></i></a>
                      <ul class="share-buttons">
                          <li class="facebook"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </li> -->
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
               		<ul class="gallery-actions">
                      	<!-- <li><a href="gallery-grid-ilightbox.html" data-toggle="tooltip" data-original-title="Previous Gallery" data-placement="bottom"><i class="fa fa-angle-left"></i></a></li> -->
                    	<li><a href="{{route('gallery')}}" data-toggle="tooltip" data-original-title="All Galleries" data-placement="bottom"><i class="fa fa-th"></i></a></li>
                    	<!-- <li><a href="gallery-grid-prettyphoto.html" data-toggle="tooltip" data-original-title="Next Gallery" data-placement="bottom"><i class="fa fa-angle-right"></i></a></li> -->
                   	</ul>
              		</div>
              </div>
            </div>
        </div>
        <ul class="grid-holder col2 ilightbox-gallery">
            <li class="grid-item format-image">
                <a href="images/nslide1.jpg" class="media-box img-responsive" data-caption="Generis and Bee Photography">
                    <img src="images/nslide1.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li class="grid-item format-image">
                <a href="images/nslide2.jpg" class="media-box img-responsive" data-caption="Generis and Bee Photography">
                    <img src="images/nslide2.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li class="grid-item format-image">
                <a href="images/nslide3.jpg" class="media-box img-responsive" data-caption="Generis and Bee Photography">
                    <img src="images/nslide3.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li class="grid-item format-image">
                <a href="images/nslide4.jpg" class="media-box img-responsive" data-caption="Generis and Bee Photography">
                    <img src="images/nslide4.jpg" class="img-responsive" alt="">
                </a>
            </li>
            <li class="grid-item format-image">
                <a href="images/nslide5.jpg" class="media-box img-responsive" data-caption="Generis and Bee Photography">
                    <img src="images/nslide5.jpg" class="img-responsive" alt="">
                </a>
            </li>
            
        </ul>
    </div>
  </div>
  @include('contents.footer')

</body>

</html>