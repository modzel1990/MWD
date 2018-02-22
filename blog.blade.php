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
                        <a class="nav-item nav-link" href="#blog">Blog</a>
                        <a class="nav-item nav-link" href="/properties">Properties</a>
                        <a class="nav-item nav-link" href="/about">About</a>
                        <a class="nav-item nav-link" href="/contact">Contact</a>
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

          <section class="block" id="news">
              <div class="container">
                  <div class="block__wrapper">
                      <div class="block__title text-center">
                          <h2>What's New</h2>
													<hr class="hrblack">
                      </div>
                      <!--end block-title-->

                      <div class="row">

                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                              <a href="#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter left and move 10px">
                                  <div class="box__wrapper">
                                      <div class="box__header">
                                          <div class="box__image img-into-bg">
                                              <img src="assets/img/image-01.jpg" alt="">
                                          </div>
                                      </div>
                                      <div class="box__content">
                                          <h4>Blog Post Title</h4>
                                          <h5>Click for more</h5>
                                      </div>
                                  </div>
                                  <!--end box__wrapper-->
                              </a>
                              <!--end box-image-->
                          </div>
                          <!--end col-xl-4-->

                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                              <a href="#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter bottom and move 10px after">
                                  <div class="box__wrapper">
                                      <div class="box__header">
                                          <div class="box__image img-into-bg">
                                              <img src="assets/img/image-01.jpg" alt="">
                                          </div>
                                      </div>
                                      <div class="box__content">
                                        <h4>Blog Post Title</h4>
                                          <h5>Click for more</h5>
                                      </div>
                                  </div>
                                  <!--end box__wrapper-->
                              </a>
                              <!--end box-image-->
                          </div>
                          <!--end col-xl-4-->

                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
                              <a href="#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter right and move 10px">
                                  <div class="box__wrapper">
                                      <div class="box__header">
                                          <div class="box__image img-into-bg">
                                              <img src="assets/img/image-01.jpg" alt="">
                                          </div>
                                      </div>
                                      <div class="box__content">
                                          <h4>Blog Post Title</h4>
                                          <h5>Click for more</h5>
                                      </div>
                                  </div>
                                  <!--end box__wrapper-->
                              </a>
                              <!--end box-image-->
                          </div>
                          <!--end col-xl-4-->

                      </div>
                      <!--end row-->
											<div class="row">
												<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
														<a href="#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter left and move 10px">
																<div class="box__wrapper">
																		<div class="box__header">
																				<div class="box__image img-into-bg">
																						<img src="assets/img/image-01.jpg" alt="">
																				</div>
																		</div>
																		<div class="box__content">
																				<h4>Blog Post Title</h4>
																				<h5>Click for more</h5>
																		</div>
																</div>
																<!--end box__wrapper-->
														</a>
														<!--end box-image-->
												</div>
												<!--end col-xl-4-->

												<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
														<a href="#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter bottom and move 10px after">
																<div class="box__wrapper">
																		<div class="box__header">
																				<div class="box__image img-into-bg">
																						<img src="assets/img/image-01.jpg" alt="">
																				</div>
																		</div>
																		<div class="box__content">
																			<h4>Blog Post Title</h4>
																				<h5>Click for more</h5>
																		</div>
																</div>
																<!--end box__wrapper-->
														</a>
														<!--end box-image-->
												</div>
												<!--end col-xl-4-->

												<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
														<a href="#" class="box box--image box--image--full-image" data-toggle="modal" data-target="#modal-feature" data-scroll-reveal="enter right and move 10px">
																<div class="box__wrapper">
																		<div class="box__header">
																				<div class="box__image img-into-bg">
																						<img src="assets/img/image-01.jpg" alt="">
																				</div>
																		</div>
																		<div class="box__content">
																				<h4>Blog Post Title</h4>
																				<h5>Click for more</h5>
																		</div>
																</div>
																<!--end box__wrapper-->
														</a>
														<!--end box-image-->
												</div>
												<!--end col-xl-4-->
											</div>
											<!--end row-->
                  </div>
                  <!--end block__wrapper-->
              </div>
              <!--end container-->
              <div class="background-wrapper" data-background-color="#f9f9f9">
                  <div class="background--image opacity-10 background--repeat-repeat">
                      <img src="assets/img/pattern-topo.png" alt="">
                  </div>
              </div>
              <!--end background-->
          </section>

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
