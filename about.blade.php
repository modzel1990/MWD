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
						@include('partials.nav')
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <div id="content">

          <!--TEXT with IMAGE BLOCK********************************************************************************-->

          <section class="block" id="about">
              <div class="container">
                  <div class="block__wrapper">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="push-down">
                                  <h2 class="text-align-right" data-scroll-reveal="enter left and move 10px">About us</h2>
																	<hr class="hrblack">
                                  <p data-scroll-reveal="enter left and move 10px after 0.1s" class="pleft">
                                    <h3>Our Business!</h3>
																		Foot Forward is about relationship building and understanding what our investors want and therefore ... need.
																		We understand that you have a busy life and that you have money, but so little time.
																		<br><br>
																		We're here to tell you that we are here to help you maximise your time. To make sure that your investment is procured, renovated, filled with furniture, and excellent tenants found, and your bills, tenants, and property managed effectively. Without any of your involvement if you can’t find any time.
																		<br><br>
																		We have forged relationships with our United Kingdom building team associates under very strict contracts for our clients' protection to facilitate this.
																		In the minefield of real estate, you need a very clear and simple plan in order for it to make perfect sense. We have put this plan together and tested it on more than 100 occasions to make absolutely sure it will work for you under any circumstances.
																		<br><br>
																		We have certainly paid our dues in property investing (including over twenty-five years of property investing in the UK. ) Learning by making mistakes on our own investment portfolio in the early years. Then correcting and moving forwards, and ever upwards.
																		<br><br>
																		Property and tenants are a fluid business and need constant work. As well as contact between the letting agent and the tenants in order to make a fruitful investment constantly pay off.
																		We stress this to our clients from day one that it is of major importance to have a really great letting agent on their side. Who when they say they are good at letting multi-let HMO properties, ... they can actually prove that they can look after your investments.
																		After all, what is the point of owning a lovely well renovated investment property and having just the bills covered from having little or no money coming in from it?
                                    <br><br>
																		<h3>Our promise</h3>
																		The promise we make to you is genuinely important for us to uphold, as we like looking after our clients. We like making promises we can keep, and we like delivering on our promises.
																		It’s what we spring out of bed for in the mornings, ... it’s our why!
																		<br><br>
																		This is why we developed from the ground up, our own Lettings agency( who we wholly own. ) Who specifically specialise in Multilet HMO properties that yield high income,
																		.... and it’s what makes us different from all the rest.
																		....and it’s what makes us better than the rest so that we can promise and deliver.
																		So that our clients' investments get looked after and remain fruitful. Even when no one is watching.
                                  </p>
																	<div class="text-align-right">
                                  <a href="#contact" class="btn btn-primary btn-framed">Get in touch</a>
																</div>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <img class="width-100 shadow rounded-corners" src="/img/about3.jpg" alt="">
                          </div>
                      </div>
                      <!--end row-->
                      <div class="background-wrapper">
                          <div class="background background--image opacity-70 background--repeat-repeat height-50">
                              <img src="assets/img/pattern-dot.png" alt="">
                          </div>
                      </div>
                      <!--end background-->
                  </div>
                  <!--end block__wrapper-->
              </div>
              <!--end container-->
          </section>
          <!--end #text-image-block.block-->

          <!-- Gallery -->
            <section class="block" id="gallery">
                <div class="container">
                    <div class="block__wrapper">
                        <div class="block__title">
                            <h2>Gallery</h2>
														<hr class="hrblack">
                        </div>
                        <!--end block-title-->
                    </div>
                    <!--end block__wrapper-->
                </div>
                <!--end container-->
                <div class="owl-carousel carousel-gallery" data-owl-items="5" data-owl-dots="1" data-owl-nav="0">

                    <a href="assets/img/gallery-01.jpg" class="carousel-gallery__image popup-image">
                        <div class="img-into-bg">
                            <img src="assets/img/gallery-01.jpg" alt="">
                        </div>
                    </a>
                    <a href="assets/img/gallery-02.jpg" class="carousel-gallery__image popup-image">
                        <div class="img-into-bg">
                            <img src="assets/img/gallery-02.jpg" alt="">
                        </div>
                    </a>
                    <a href="assets/img/gallery-03.jpg" class="carousel-gallery__image popup-image">
                        <div class="img-into-bg">
                            <img src="assets/img/gallery-03.jpg" alt="">
                        </div>
                    </a>
                    <a href="assets/img/gallery-04.jpg" class="carousel-gallery__image popup-image">
                        <div class="img-into-bg">
                            <img src="assets/img/gallery-04.jpg" alt="">
                        </div>
                    </a>
                    <a href="assets/img/gallery-05.jpg" class="carousel-gallery__image popup-image">
                        <div class="img-into-bg">
                            <img src="assets/img/gallery-05.jpg" alt="">
                        </div>
                    </a>
                    <a href="assets/img/image-04.jpg" class="carousel-gallery__image popup-image">
                        <div class="img-into-bg">
                            <img src="assets/img/image-04.jpg" alt="">
                        </div>
                    </a>
                    <a href="assets/img/image-03.jpg" class="carousel-gallery__image popup-image">
                        <div class="img-into-bg">
                            <img src="assets/img/image-03.jpg" alt="">
                        </div>
                    </a>

                </div>
                <div class="background-wrapper">
                    <div class="background background--image background--repeat-repeat opacity-50">
                        <img src="assets/img/pattern-dot.png" alt="">
                    </div>
                </div>
                <!--end background-->
            </section>
            <!--end #section.block-->

            <section class="block" id="location">
                <div class="container">
                    <div class="block__wrapper">
                        <div class="block__title">
                            <h2>Where are we</h2>
														<hr class="hrblack">
                            <h3>Pop into the office for a coffee &amp; a chat</h3>
                        </div>
                        <!--end block-title-->
                        <div class="map-wrapper">
                            <div class="pack d-inline-block" data-scroll-reveal="enter bottom and move 10px">
                                <h4>Foot Forward Properties</h4>
                                <address>
                                    Doncaster
                                </address>
                                <div class="image">
                                    <div class="img-into-bg">
                                        <img src="assets/img/gallery-01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="map" class="height-500px"></div>
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
