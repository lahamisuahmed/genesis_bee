
<header class="site-header" >
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6">
          <h1 class="logo"> <a href="{{route('home')}}"><img src="images/log.png" width="223px" height="35px" alt="Logo"></a> </h1>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-6 main-menu-wrapper">
          <nav class="navigation">
            <ul class="sf-menu">
              <li><a href="{{route('home')}}">Home</a> </li>
              <li><a href="{{route('about')}}">About</a> </li>
              <li><a href="{{route('contact')}}">Contact</a></li>
              <li><a href="{{route('gallery')}}">Gallery Archive</a>
                <ul class="dropdown">
                  <li><a href="{{route('photography')}}">Photography</a>
                      <ul class="dropdown">
                        <li><a href="{{route('wedding_gallery')}}">Weddings</a></li>
                        <li><a href="{{route('event')}}">Events</a></li>
                        <li><a href="{{route('lifestyle')}}">Life Style</a></li> 
                      </ul>
                  </li>
                  <li><a href="{{route('gallery')}}">Videography</a></li>
                </ul>
              </li>
              <li><a href="{{route('portfolio')}}">Portfolio</a>
              </li>

              <li><a href="{{route('blog')}}">Blog</a></li>
              
            </ul>
          </nav>
        </div>
      </div>
      <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
  </div>
</header>