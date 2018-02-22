<!doctype html>
<html lang="en">
<head>
	@include('partials.head')

</head>
<body data-spy="scroll" data-target=".navbar">
    <div class="page-wrapper" id="page-top">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="hero">

            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <a class="navbar-brand" href="#page-top">
                <h4 style="padding-top: 10px;"> Foot Forward Properties</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="/#page-top">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="/blog">Blog</a>
                        <a class="nav-item nav-link" href="/properties">Properties</a>
                        <a class="nav-item nav-link" href="/about">About</a>
                        <a class="nav-item nav-link" href="#contact">Contact</a>
                        <span class="divider"></span>
                    </div>
                    <div class="udpad">
                      <i class="fas fa-phone-square"><span class="nav-info">01302 000000</span></i>
                      <i class="fas fa-envelope-square"><span class="nav-info">example@email.com</span></i>
                    </div>
                </div>
            </nav>

            <div class="hero__background">
                <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3">
                    <div class="background">
                        <div class="owl-carousel hero__slider parallax-element" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="1" data-owl-loop="1" data-owl-fadeout="1" data-owl-nav-container=".slider-nav">
                            <div class="slide img-into-bg">
                                <img src="assets/img/slide-01.jpg" alt="">
                            </div>
                            <div class="slide img-into-bg">
                                <img src="assets/img/slide-02.jpg" alt="">
                            </div>
                            <div class="slide img-into-bg">
                                <img src="assets/img/slide-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end background-->
            </div>

            <div class="container">
                <div class="row">
                    <div class="hero__outer-wrapper">
                        <div class="hero__inner-wrapper align-bottom">
                            <div class="col-xl-5 col-lg-5 col-md-7">
                                <div class="hero__caption has-dark-background">
                                    <h1>Footforward Properties</h1>
                                    <form class="form">
                                        <div class="form-group">
                                            <label for="form-hero-email">Subscribe to our newsletter for updates.</label>
                                            <div class="input-group">
                                                <input id="form-hero-email" type="text" class="form-control" placeholder="Your Email" aria-label="Your Email">
                                                <span class="input-group-btn">
                                                <button class="btn btn-secondary" type="button">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </span>
                                            </div>

                                        </div>
                                        <!--end form-group -->
                                    </form>
                                    <hr>
                                    <p>
                                      We are a high quality, high standard, HMO company based in Doncaster with properties located all across South Yorkshire.
                                    </p>
                                    <a href="/properties" class="btn btn-primary btn-framed">Browse our Properties</a>
                                </div>
                            </div>
                            <div class="slider-nav"></div>
                        </div>
                        <!--end container-->
                    </div>
                    <!--end hero__inner-wrapper-->
                </div>
            </div>
            <!--end hero__outer-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <div id="content">

            <section class="block" id="location">
                <div class="container">
                    <div class="block__wrapper">
                        <div class="block__title">
                            <h2>Where are we</h2>
														<hr class="hrblack">
                        </div>
                        <!--end block-title-->
												<div class="row nopad">
													<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        		<div class="map-wrapper">
                            	<div id="map" class="mapstyle"></div>
															<div class="transparentbox" style="z-index: 8000;">
																<h3 class="fonty">Footforward Properties</h3>
																<p class="pfonty">We are <span id="cord" class="orange">here</span> for you!</p>
															</div>
                        	</div>
												</div>
													<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
															<div class="addressbox">
																  <h4>Feel free to contact us or pop into the office for a coffee &amp; a chat</h4>
																	<p class="addresslines">
																	<i class="fas fa-address-card"></i> Address:<br> <span class="pgrey">Sample address</span>   <br>
																	<i class="fas fa-phone"></i> Phone:<br> <span class="pgrey">01302 000000</span>			    <br>
																	<i class="fas fa-envelope"></i> E-mail:<br> <span class="pgrey">example@email.com</span>   <br>
																</p>
															</div>
													</div>
											</div>
                        <!--end map-wrapper-->
                    </div>
                    <!--end block__wrapper-->
                </div>
                <!--end container-->
            </section>
            <!--end #section.block-->

            <section class="block" id="contact">
                <div class="container">
                    <div class="block__wrapper">
                        <div class="block__title">
                            <h2>Contact</h2>
														<hr class="hrblack">
                        </div>
                        <!--end block-title-->
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                                <h4>Our Agent</h4>
                                <div class="person">
                                    <div class="person__image">
                                        <div class="img-into-bg">
                                            <img src="assets/img/author-01.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="person__description">
                                        <h5>Jane Doe</h5>
                                        <figure>
                                            <label>Phone:</label>
                                            <div>(123) 456 789 000</div>
                                        </figure>
                                        <figure>
                                            <label>E-mail:</label>
                                            <div>
                                                <a href="#">john.doe@example.com</a>
                                            </div>
                                        </figure>
                                        <figure>
                                            <label>Skype:</label>
                                            <div>John Doe</div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                                <h4>Contact Form</h4>

                                <form id="form-contact" method="post" class="form clearfix">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-name">Your Name</label>
                                                <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-email">Your Email</label>
                                                <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                    </div>
                                    <!--end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form-contact-message">Your Message</label>
                                                <textarea class="form-control" id="form-contact-message" rows="8" name="message" placeholder="Your Message" required></textarea>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-12 -->
                                    </div>
                                    <!--end row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn pull-right btn-primary btn-framed" id="form-contact-submit">Send a Message</button>
                                    </div>
                                    <!--end form-group -->
                                    <div class="form-contact-status"></div>
                                </form>
                                <!--end form-contact -->
                            </div>
                            <!--end col-xl-7-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end block__wrapper-->
                </div>
                <!--end container-->
                <div class="background-wrapper">
                    <div class="background background--image background--repeat-repeat opacity-50">
                        <img src="assets/img/pattern-dot.png" alt="">
                    </div>
                </div>
                <!--end background-->
            </section>
            <!--end #section.block-->

        </div>
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        @include('partials.footer')
        <!--end footer-->
    </div>
    <!--end page-->
@include('partials.scripts')

</body>
</html>
