<!DOCTYPE html>
<html lang="en">
  @include('contents.header')
  <body class="fs contact">
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->
  <div class="body"> 
    @include('contents.nav')
    <div class="clearfix"></div>
    <!-- Start Content -->
    <div class="main page" role="main">
        <div id="content" class="content full">
                <div class="row">
                <div class="col-md-6">
                    <div id="googleMap" class="wheighter"></div>
                    </div>
                <div class="col-md-6">
                    <div class="contact-box wheighter">
                        <div class="row">
                        <div class="contactForm">
                             <!-- CONTACT FORM -->
                            <div class="col-md-12">
                                <h4 class="widgettitle">Get in touch with us</h4>
                            </div>
                            <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="http://html.imithemes.com/cameroll/mail/contact.php">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                                </div>
                                <div class="form-group">
                                  <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                </div>
                                <div class="form-group">
                                  <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                              </div>
                            </form>
                            <div class="clearfix"></div>
                            <div id="message"></div>
                        </div>
                        <!-- CONTACT INFO -->
                            <section class="contact-info">
                              <div class="col-md-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <address>
                                2500 2d Avenue.<br>
                                Gwarimpa Estate,<br>
                                Abuja - 77042<br>
                                Nigeria
                                </address>
                              </div>
                              <div class="col-md-4">
                                <h3><i class="fa fa-envelope-o"></i> Email</h3>
                                <p><a href="mailto:hello@genesis_bee.com">hello@genesis_bee.com</a></p>
                              </div>
                              <div class="col-md-4">
                                <h3><i class="fa fa-phone"></i> Call Us</h3>
                                <p><i class="fa fa-mobile-phone"></i> +234 70 644 928 79</p>
                                <p><i class="fa fa-skype"></i> @Cameroll</p>
                              </div>
                            </section>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
        

    @include('contents.footer')
    
</body>
</html>