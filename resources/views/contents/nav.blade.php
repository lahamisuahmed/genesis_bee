<!-- Start Site Header -->
      <header class="site-header">
        <div class="top-header">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-6">
                <h1 class="logo"> <a href="index.html"><img src="images/logo.png" alt="Logo"></a> </h1>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-6 main-menu-wrapper">
                <nav class="navigation">
                  <ul class="sf-menu">
                    <li><a href="{{route('home')}}">Home</a> </li>
                    <li><a href="{{route('about')}}">About</a> </li>
                    <li><a href="{{route('gallery')}}">Gallery Archive</a>
                      <ul class="dropdown">
                        <li><a href="{{route('wedding_gallery')}}">Wedding</a></li>
                        <li><a href="{{route('gallery')}}">Landscape</a></li>
                        <li><a href="{{route('gallery')}}">All</a></li> 
                      </ul>
                    </li>
                    <li><a href="portfolio-grid.html">Portfolio</a>
                      <ul class="dropdown">
                        <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                        <li><a href="project-bgimage.html">Single Project with BG Image</a></li>
                        <li><a href="project-bgcolor.html">Single Project with BG color</a></li>
                        <li><a href="project-sidebar.html">Single Project with Sidebar</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </header>
      <!-- End Site Header -->