<!DOCTYPE html>
<html lang="en">
  @include('contents.header')
  <body>
    <div class="container-fluid">
        @include('contents.nav')
        <div class="breadcrumb">
                <h2>Contact</h2>
            </div>
            
           <!--  <div class="map">
                <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
            </div> -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="recent">
                                <h3>Send us a message</h3>
                            </div>      
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                
                                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
                            </form>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="recent">
                                <h3>Get in touch with us</h3>
                            </div>
                            <div class="">
                                <p>Nam liber tempor cum soluta nobis eleifend option 
                                congue nihil imperdiet doming id quod mazim placerat
                                facer possim assum. Typi non habent claritatem insitam;
                                est usus legentis in iis qui facit eorum.</p>
                                <p>Nam liber tempor cum soluta nobis eleifend option 
                                congue nihil imperdiet doming id quod mazim placerat
                                facer possim assum. Typi non habent claritatem insitam;
                                est usus legentis in iis qui facit eorum.</p>
                                
                                <h4>Address:</h4>Little Lonsdale St, New York<br>
                                <h4>Telephone:</h4>345 578 59 45 416</br>
                                <h4>Fax:</h4>123 456 789
                            </div>                                      
                        </div>          
                    </div>
                </div>
    </div>

    @include('contents.footer')
    
</body>
</html>