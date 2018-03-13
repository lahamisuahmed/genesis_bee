<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" id="brand" href="{{ route('welcome') }}"><span>Genesis & Bee</span></a>
           </div>

        <div class="collapse navbar-collapse  navbar-responsive-collapse">                          
            <div class="menu">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"  class="active"><a href="{{ route('welcome') }}">Home</a></li>
                    <li role="presentation"><a href="{{ route('about') }}">About Us</a></li>
                    <li role="presentation"><a href="{{ route('event') }}">Events</a></li>
                    <li role="presentation"><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li role="presentation"><a href="{{ route('contact') }}">Contact</a></li> 
                    <li role="presentation"><a href="contact.html">Blog</a></li>                    
                </ul>
            </div>
        </div>          
    </div>
</nav>