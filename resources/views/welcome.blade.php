<!DOCTYPE html>
<html lang="en">
  @include('contents.header')
  <body>
    <div class="container-fluid">
        @include('contents.nav')
        
        <div class="carousel slide" data-ride="carousel"  data-interval="5000" id="myCarousel" style="margin-top: 50px">
            
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                <li data-slide-to="1" data-target="#myCarousel"></li>
                <li data-slide-to="2" data-target="#myCarousel"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active" id="slide1">
                    <img src="{{asset('img/8.jpg')}}" class="img-responsive">
                    <!-- <div class="carousel-caption">
                        <h4>first carousel slide</h4>
                        <p>In lahm technologies we teach you how to build your next web application</p>
                    </div> --><!-- end carousel-caption-->
                </div><!-- end item -->
                
                <div class="item" id="slide2">
                    <img src="{{asset('img/9.jpg')}}" class="img-responsive">
                    <!-- <div class="carousel-caption">
                        <h4>second carousel slide</h4>
                        <p>In lahm technologies we do almost everything in the IT world</p>
                    </div> --><!-- end carousel-caption-->
                </div><!-- end item -->
                
                <div class="item" id="slide3">
                    <img src="{{asset('img/7.jpg')}}" class="img-responsive">
                    <!-- <div class="carousel-caption">
                        <h4>third carousel slide</h4>
                        <p>Learn everything you need from us</p>
                    </div> --><!-- end carousel-caption-->
                </div><!-- end item -->
            </div><!-- carousel-inner -->
            
            <!-- Controls -->
            <a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
            <a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
        
        </div><!-- end myCarousel -->
        
        <!-- <div class="jumbotron">
            <h1>My Family</h1>
            <p>
            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
            excepturi sint <br>
            Voluptatem accusantium doloremque laudantium sprea totam rem aperiam
            </p>
        </div>
        
        <div class="container">
            <div class="col-md-6" >
                <img src="img/10.jpg" alt="" class="img-responsive" />
            </div>
            <div class="col-md-6" >
                <img src="img/11.jpg" alt="" class="img-responsive" />
            </div>
        </div> -->

        
    </div>

    @include('contents.footer')
    
</body>
</html>