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
