<!DOCTYPE html>
<html lang="en">
  @include('contents.header')
  <body>
    <div class="container-fluid">
        @include('contents.nav')
		<div class="breadcrumb">
			<h2>Gallery</h2>
		</div>

		<section id="section-works" class="section appear clearfix">
				<div class="container">						
					<div class="row">
						<nav id="filter" class="col-md-12 text-center">
							<ul>
							  <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
							  <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >Events</a></li>
							  <li><a href="#"  class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
							  <li ><a href="#" class="btn-theme btn-small" data-filter=".print">Family</a></li>
							</ul>
						</nav>
						<div class="col-md-12">
							<div class="row">
								<div class="portfolio-items isotopeWrapper clearfix" id="3">							  
									<article class="col-md-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<div class="wow rotateInUpLeft" data-animation-delay="4.8s">
												<img src="img/portfolio/1.jpg" alt="welcome" />
											</div>
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 1</a></h5>
													<a href="img/portfolio/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												</div>										   
											</div>
										</div>
									</article>

									<article class="col-md-4 isotopeItem photography">
										<div class="portfolio-item">
											<div class="wow bounceIn">
												<img src="img/portfolio/2.jpg" alt="" />
											</div>
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 2</a></h5>
													<a href="img/portfolio/2.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												</div>										   
											</div>
										</div>
									</article>
								

									<article class="col-md-4 isotopeItem photography">
										<div class="portfolio-item">
											<div class="wow rotateInDownRight">
												<img src="img/portfolio/3.jpg" alt="" />
											</div>	
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 3</a></h5>
													<a href="img/portfolio/3.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												 </div>										   
											</div>
										</div>
									</article>

									<article class="col-md-4 isotopeItem print">
										<div class="portfolio-item">
											<div class="wow rotateInUpLeft">
												<img src="img/portfolio/4.jpg" alt="" />
											</div>	
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 4</a></h5>
													<a href="img/portfolio/4.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												 </div>										   
											</div>
										</div>
									</article>

									<article class="col-md-4 isotopeItem photography">
										<div class="portfolio-item">
											<div class="wow bounceIn">
												<img src="img/portfolio/5.jpg" alt="" />
											</div>
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 5</a></h5>
													<a href="img/portfolio/5.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												 </div>										   
											</div>
										</div>
									</article>

									<article class="col-md-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<div class="wow rotateInDownRight">
												<img src="img/portfolio/6.jpg" alt="" />
											 </div>		
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 6</a></h5>
													<a href="img/portfolio/6.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												 </div>										   
											</div>
										</div>
									</article>

									<article class="col-md-4 isotopeItem print">
										<div class="portfolio-item">
											<div class="wow rotateInUpLeft">
												<img src="img/portfolio/7.jpg" alt="" />
											</div>
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 7</a></h5>
													<a href="img/portfolio/7.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												 </div>										   
											</div>
										</div>
									</article>

									<article class="col-md-4 isotopeItem photography">
										<div class="portfolio-item">
											<div class="wow bounceIn">
												<img src="img/portfolio/8.jpg" alt="" />
											</div>	
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 8</a></h5>
													<a href="img/portfolio/8.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												 </div>										   
											</div>
										</div>
									</article>

									<article class="col-md-4 isotopeItem print">
										<div class="portfolio-item">
											<div class="wow rotateInDownRight">
												<img src="img/portfolio/9.jpg" alt="" />
											</div>
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<h5><a href="#">Project name 9</a></h5>
													<a href="img/portfolio/9.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
												 </div>										   
											</div>
										</div>
									</article>
								</div>                                       
							</div>                                     
						</div>
					</div>				
				</div>
			</section>

		</div>

    @include('contents.footer')
    
</body>
</html>