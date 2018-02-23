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

            <!--IMAGE BOXES******************************************************************************************-->

            <section class="block" id="news">
                <div class="container">
                    <div class="block__wrapper">
                        <div class="block__title text-center">
                            <h2>Latest News</h2>
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
            <!--end #image-blocks.block-->

            <!--TEXT with IMAGE BLOCK********************************************************************************-->

            <section class="block" id="about">
                <div class="container">
                    <div class="block__wrapper">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="push-down">
                                    <h2 class="text-align-right" data-scroll-reveal="enter left and move 10px">High Quality, Modern HMO's</h2>
                                    <hr class="hrblack">
                                    <p class="pleft" data-scroll-reveal="enter left and move 10px after 0.1s">
                                      Our passion is to offer our investors a relationship built on trust, integrity and sincerity backed by professionals with experience.
                                      Furthermore, we only recommend the types of property investments in which we ourselves invest. That generate strong high yielding cash flows.
                                      It is our continued intention to develop our own and our investors’ portfolios. With a clear focus on value and integrity. We have a strong track record within the current and ever-changing property investing marketplace.
                                    </p>
                                    <div class="text-align-right">
                                    <a href="#contact" class="btn btn-primary btn-framed">Get in touch</a>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img class="width-100 shadow rounded-corners" src="assets/img/image-04.jpg" alt="">
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

            <!--BLOCKQUOTE*******************************************************************************************-->

            <section class="block" id="blockquote">
                <div class="container">
                    <div class="block__wrapper">
                        <blockquote class="blockquote text-center">
                            <i class="fa fa-quote-left"></i>
                            <p>We couldn't be happier, the service provided by Foot Forward Properties is second to none.</p>
                            <footer class="blockquote-footer">John Doe</footer>
                        </blockquote>
                        <!--end blockquote-->
                    </div>
                    <!--end block__wrapper-->
                </div>
                <!--end container-->
                <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3" data-background-color="#f1f1f1">
                    <div class="background--image opacity-10 parallax-element">
                        <img src="assets/img/slide-02.jpg" alt="">
                    </div>
                </div>
                <!--end background-->
            </section>
            <!--end #blockquote.block-->

            <!--PRICING BOXES****************************************************************************************-->

            <section class="block" id="properties">
                <div class="container">
                    <div class="block__wrapper">
                        <div class="block__title">
                            <h2>Latest Properties</h2>
                            <hr class="hrblack">
                        </div>
                        <!--end block-title-->

                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="box box--pricing" data-scroll-reveal="enter bottom and move 10px">
                                    <div class="box__wrapper">
                                        <div class="box__image height-300px">
                                            <div class="">
                                                <img class="imgfit hover-shadow" src="http://media.rightmove.co.uk/dir/79k/78283/33621261/78283_DEY140581_IMG_00_0000_max_656x437.JPG" onclick="casegallery(1);openModal(1);currentSlide(1);refreshthumb()">
                                            </div>
                                            <p class="picon">
                                              <i class="fas fa-bed picon"> <span class="nowb">2</span></i>
                                              <i class="fas fa-venus-mars picon"> <span class="nowb">1</span></i>
                                              <i class="fas fa-bath picon"> <span class="nowb">1</span></i>
                                              <i class="fas fa-chart-line picon"> <span class="now">15%</span></i>
                                            </p>
                                        </div>
                                        <br>
                                        <div class="box__header">
                                            <h4>Property Name</h4>
                                            <h3 class="price">&pound;125,000</h3>
                                        </div>
                                        <br>
                                        <div class="box__footer">
                                          <!-- Enquiry -->
                                              <div class="contactF" onclick="formchoice(101)">Arrange a viewing</div>

                                              <div id="contactForm101">

                                                <h1>Interested?</h1>
                                                <small>Get in touch and I will respond as quick as possible!</small>

                                                <form class="centerform" action="#">
                                                  <input placeholder="Name" type="text" required />
                                                  <input placeholder="Email" type="email" required />
                                                  <input placeholder="Subject" type="text" value="DynamicAssignIDofProperty" required />
                                                  <textarea placeholder="Comment"></textarea>
                                                  <input class="formBtn" type="submit" />
                                                  <input class="formBtn" type="reset" />
                                                </form>
                                              </div>
                                          <!-- END of Enquiry -->
                                        </div>
                                    </div>
                                    <!--end box__wrapper-->
                                </div>
                                <!--end box-pricing-->
                            </div>
                            <!--end col-md-4-->

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <div class="box box--pricing" data-scroll-reveal="enter bottom and move 10px after 0.1s">
                                    <div class="box__wrapper">
                                        <div class="box__image height-300px">
                                            <div class="">
                                                <img class="imgfit hover-shadow" src="https://futureshg.co.uk/wp-content/uploads/2016/10/Futures-66.jpg" onclick="casegallery(2);openModal(2);currentSlide(1);refreshthumb()">
                                            </div>
                                            <p class="picon">
                                              <i class="fas fa-bed picon"> <span class="nowb">4</span></i>
                                              <i class="fas fa-venus-mars picon"> <span class="nowb">2</span></i>
                                              <i class="fas fa-bath picon"> <span class="nowb">1</span></i>
                                              <i class="fas fa-chart-line picon"> <span class="now">20%</span></i>
                                            </p>
                                        </div>
                                        <br>
                                        <div class="box__header">
                                              <h4>Property Name</h4>
                                            <h3 class="price">&pound;125,000</h3>
                                        </div>
                                        <br>
                                        <div class="box__footer">
                                          <!-- Enquiry -->
                                              <div class="contactF" onclick="formchoice(102)">Arrange a viewing</div>

                                              <div id="contactForm102">

                                                <h1>Interested?</h1>
                                                <small>Get in touch and I will respond as quick as possible!</small>

                                                <form class="centerform" action="#">
                                                  <input placeholder="Name" type="text" required />
                                                  <input placeholder="Email" type="email" required />
                                                  <input placeholder="Subject" type="text" value="DynamicAssignIDofProperty" required />
                                                  <textarea placeholder="Comment"></textarea>
                                                  <input class="formBtn" type="submit" />
                                                  <input class="formBtn" type="reset" />
                                                </form>
                                              </div>
                                          <!-- END of Enquiry -->
                                        </div>
                                    </div>
                                    <!--end box__wrapper-->
                                </div>
                                <!--end box-pricing-->
                            </div>
                            <!--end col-md-4-->

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
                                <div class="box box--pricing" data-scroll-reveal="enter bottom and move 10px after 0.2s">
                                    <div class="box__wrapper">
                                        <div class="box__image height-300px">
                                            <div class="">
                                                <img class="imgfit hover-shadow" src="https://lid.zoocdn.com/645/430/ddb9e14642576836576e2f3a28ecf598912cf809.jpg" onclick="casegallery(3);openModal(3);currentSlide(1);refreshthumb()">
                                            </div>
                                            <p class="picon">
                                              <i class="fas fa-bed picon"> <span class="nowb">3</span></i>
                                              <i class="fas fa-venus-mars picon"> <span class="nowb">1</span></i>
                                              <i class="fas fa-bath picon"> <span class="nowb">1</span></i>
                                              <i class="fas fa-chart-line picon"> <span class="now">15%</span></i>
                                            </p>
                                        </div>
                                        <br>
                                        <div class="box__header">
                                              <h4>Property Name</h4>
                                            <h3 class="price">&pound;125,000</h3>
                                        </div>
                                        <br>
                                        <div class="box__footer">
                                          <!-- Enquiry -->
                                              <div class="contactF" onclick="formchoice(103)">Arrange a viewing</div>

                                              <div id="contactForm103">

                                                <h1>Interested?</h1>
                                                <small>Get in touch and I will respond as quick as possible!</small>

                                                <form class="centerform" action="#">
                                                  <input placeholder="Name" type="text" required />
                                                  <input placeholder="Email" type="email" required />
                                                  <input placeholder="Subject" type="text" value="DynamicAssignIDofProperty" required />
                                                  <textarea placeholder="Comment"></textarea>
                                                  <input class="formBtn" type="submit" />
                                                  <input class="formBtn" type="reset" />
                                                </form>
                                              </div>
                                          <!-- END of Enquiry -->
                                        </div>
                                    </div>
                                    <!--end box__wrapper-->
                                </div>
                                <!--end box-pricing-->
                            </div>
                            <!--end col-md-4-->
                            <!-- Modal Galleries -->

                            <!-- The Modal/Lightbox 1-->
                            <div id="1" class="modalus">
                             <span class="close cursor" onclick="closeModal(1)">&times;</span>
                             <div class="modal-contentus">
                               <div class="row">
                               <div class="col-md-12">
                                 <div class="row">
                                 <div class="col-md-8">
                                   <div class="mod1 fade" class="mySlides">
                                     <div class="numbertext">1 / 4</div>
                                     <img class="respsize" src="http://www.aptmags.com/wp-content/uploads/2014/01/2014-Modern-Apartment-Design-Living-Room-and-Kitchen-Set.jpg" style="width:100%; max-height: 60vh;"></br>
                                   </div>

                                   <div class="mod1 fade" class="mySlides">
                                     <div class="numbertext">2 / 4</div>
                                     <img class="respsize" src="https://i.pinimg.com/736x/1d/bd/32/1dbd321aa618d0276d0a5263dab713d1--oscar-terrace.jpg" style="width:100%; max-height: 60vh;"></br>
                                   </div>

                                   <div class="mod1 fade" class="mySlides">
                                     <div class="numbertext">3 / 4</div>
                                     <img class="respsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" style="width:100%; max-height: 60vh;"></br>
                                   </div>

                                   <div class="mod1 fade" class="mySlides">
                                     <div class="numbertext">4 / 4</div>
                                     <img class="respsize" src="http://www.moko3d.com/files/Projects/Visualisation%20of%20sea%20view%20property%20in%20Brighton%20Arundel/Period%20details%20like%20ceiling%20mouldings%20in%20this%20visualisation.jpg" style="width:100%; max-height: 60vh;"></br>
                                   </div>

                                   <!-- Caption text -->
                                   <div class="row nopad">
                                   <div class="caption-container">
                                     <div class="row nopad">
                                       <div class="col-md-12 nopad center">
                                         <p class="captionus" id="caption1"></p>
                                         <!-- next controls -->
                                         <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                         <!--   previous controls -->
                                         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                       </div>

                                      </div>
                                    </div>
                                  </div>

                                  </div>
                                 <div class="col-md-4 pad">
                                   <div class="desccont">
                                  <h3 class="modalush3">Description of Property</h3>
                                   <p class="modalusp">3-bed detached house fully furnished with outstanding investment possibilities</p>
                                   <p class="modalusp"><i class="fas fa-bed"></i>  3 bedrooms</p>
                                   <p class="modalusp"><i class="fas fa-venus-mars"></i> 2 toilets</p>
                                   <p class="modalusp"><i class="fas fa-bath"></i> 1 bathroom</p>
                                   <p class="modalusp"><i class="fab fa-envira"></i> 1 enormous living room</p>
                                   <p class="modalusp"><i class="fab fa-expeditedssl"></i> 1 shed with lock</p>
                                   <p class="modalusp"><i class="fas fa-money-bill-alt"></i> Price: <span class="price">&pound;170 000</span></p>
                                   <p class="modalusp"><i class="fas fa-chart-line"></i> Yield: <span class="price">15%</span></p>

                                  </div>
                                  <br>
                                  <!-- Enquiry -->
                                  <div class="desccont center">

                                    <div class="contact disp" onclick="formchoice(1)">Contact Now</div>

                                    <div id="contactForm1">

                                      <h1>Interested?</h1>
                                      <small>Get in touch and we will respond as quick as possible!</small>

                                      <form class="centerform" action="#">
                                        <input placeholder="Name" type="text" required />
                                        <input placeholder="Email" type="email" required />
                                        <input placeholder="Subject" type="text" value="DynamicAssignIDofProperty" required />
                                        <textarea placeholder="Comment"></textarea>
                                        <input class="formBtn" type="submit" />
                                        <input class="formBtn" type="reset" />
                                      </form>

                                  </div>

                                  </div>
                                 </div>
                               </div>


                               </div>

                            <div class="col-md-12">
                               <!-- Thumbnail image controls -->
                               <div class="responsive1">
                                   <div>
                                     <img class="imgthumb1 imgthumbsize" src="http://www.aptmags.com/wp-content/uploads/2014/01/2014-Modern-Apartment-Design-Living-Room-and-Kitchen-Set.jpg" onclick="currentSlide(1)" alt="Description under picture">
                                   </div>

                                   <div>
                                     <img class="imgthumb1 imgthumbsize" src="https://i.pinimg.com/736x/1d/bd/32/1dbd321aa618d0276d0a5263dab713d1--oscar-terrace.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
                                   </div>

                                   <div>
                                     <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(3)" alt="Description under picture;Description under picture;Description under picture">
                                   </div>

                                   <div>
                                     <img class="imgthumb1 imgthumbsize" src="http://www.moko3d.com/files/Projects/Visualisation%20of%20sea%20view%20property%20in%20Brighton%20Arundel/Period%20details%20like%20ceiling%20mouldings%20in%20this%20visualisation.jpg" onclick="currentSlide(4)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                                   </div>
                                 <!-- More thumbnail pictures -->
                                  <div>
                                    <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(5)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                                  </div>
                                  <div>
                                    <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(6)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                                  </div>
                                  <div>
                                    <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(7)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                                  </div>
                                  <div>
                                    <img class="imgthumb1 imgthumbsize" src="https://newbuyadvice.files.wordpress.com/2012/10/a-typical-interior-of-a-waterside-grange-property.jpg" onclick="currentSlide(8)" alt="Description under picture;Description under picture;Description under picture;Description under picture">
                                  </div>
                                </div>
                              <!-- END more thumbnail pictures -->
                              </div>

                            </div>
                            </div>
                            </div>
                            <!-- END The Modal/Lightbox 1-->

                            <!-- The Modal/Lightbox 2-->
                            <div id="2" class="modalus">
                             <span class="close cursor" onclick="closeModal(2)">&times;</span>
                             <div class="modal-contentus">
                               <div class="row">
                               <div class="col-md-12">
                                 <div class="row">
                                 <div class="col-md-8">
                                   <div class="mod2 fade" class="mySlides">
                                     <div class="numbertext">1 / 2</div>
                                     <img class="respsize" src="http://cdclifestyle.com/wp-content/uploads/2011/10/luxury-property-show-home-interior.jpg" style="width:100%; max-height: 60vh;">
                                   </div>

                                   <div class="mod2 fade" class="mySlides">
                                     <div class="numbertext">2 / 2</div>
                                     <img class="respsize" src="http://vault.starproperty.my.s3.amazonaws.com/wp-content/uploads/2015/08/nu_4.jpg" style="width:100%; max-height: 60vh;">
                                   </div>
                                   <!-- Caption text -->
                                   <div class="row nopad">
                                   <div class="caption-container">
                                     <div class="row nopad">
                                       <div class="col-md-12 nopad center">
                                         <p class="captionus" id="caption2"></p>
                                         <!-- next controls -->
                                         <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                         <!--   previous controls -->
                                         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                       </div>

                                      </div>
                                    </div>
                                  </div>

                                  </div>
                                 <div class="col-md-4 pad">
                                   <div class="desccont">
                                  <h3 class="modalush3">Description of Property</h3>
                                   <p class="modalusp">3-bed detached house fully furnished with outstanding investment possibilities</p>
                                   <p class="modalusp"><i class="fas fa-bed"></i>  3 bedrooms</p>
                                   <p class="modalusp"><i class="fas fa-venus-mars"></i> 2 toilets</p>
                                   <p class="modalusp"><i class="fas fa-bath"></i> 1 bathroom</p>
                                   <p class="modalusp"><i class="fab fa-envira"></i> 1 enormous living room</p>
                                   <p class="modalusp"><i class="fab fa-expeditedssl"></i> 1 shed with lock</p>
                                   <p class="modalusp"><i class="fas fa-money-bill-alt"></i> Price: <span class="price">&pound;170 000</span></p>
                                   <p class="modalusp"><i class="fas fa-chart-line"></i> Yield: <span class="price">15%</span></p>
                                 </div>
                                 <br>
                                 <!-- Enquiry -->
                                 <div class="desccont center">

                                   <div class="contact disp" onclick="formchoice(2)">Contact Now</div>

                                   <div id="contactForm2">

                                     <h1>Interested?</h1>
                                     <small>Get in touch and we will respond as quick as possible!</small>

                                     <form class="centerform" action="#">
                                       <input placeholder="Name" type="text" required />
                                       <input placeholder="Email" type="email" required />
                                       <input placeholder="Subject" type="text" value="DynamicAssignIDofProperty" required />
                                       <textarea placeholder="Comment"></textarea>
                                       <input class="formBtn" type="submit" />
                                       <input class="formBtn" type="reset" />
                                     </form>

                                 </div>

                                 </div>
                                 </div>
                               </div>


                               </div>

                            <div class="col-md-12">
                               <!-- Thumbnail image controls -->
                               <div class="responsive2">
                                   <div>
                                     <img class="imgthumb2 imgthumbsize" src="http://cdclifestyle.com/wp-content/uploads/2011/10/luxury-property-show-home-interior.jpg" onclick="currentSlide(1)" alt="Description under picture">
                                   </div>

                                   <div>
                                     <img class="imgthumb2 imgthumbsize" src="http://vault.starproperty.my.s3.amazonaws.com/wp-content/uploads/2015/08/nu_4.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
                                   </div>
                              </div>


                            </div>
                            </div>
                            </div>
                            </div>
                            <!-- END The Modal/Lightbox 2 -->

                            <!-- The Modal/Lightbox 3-->
                            <div id="3" class="modalus">
                             <span class="close cursor" onclick="closeModal(3)">&times;</span>
                             <div class="modal-contentus">
                               <div class="row">
                               <div class="col-md-12">
                                 <div class="row">
                                 <div class="col-md-8">
                                   <div class="mod3 fade" class="mySlides">
                                     <div class="numbertext">1 / 3</div>
                                     <img class="respsize" src="http://stoneintl.net/wp-content/uploads/2017/05/The-Best-Kitchen-Cabinets.jpg" style="width:100%; max-height: 60vh;">
                                   </div>

                                   <div class="mod3 fade" class="mySlides">
                                     <div class="numbertext">2 / 3</div>
                                     <img class="respsize" src="https://mr3.homeflow-assets.co.uk/files/site_asset/image/3475/6318/_x_/PUT170080_05.jpg" style="width:100%; max-height: 60vh;">
                                   </div>

                                   <div class="mod3 fade" class="mySlides">
                                     <div class="numbertext">3 / 3</div>
                                     <img class="respsize" src="https://i.pinimg.com/originals/47/22/a5/4722a5e8b1f1c10f7887e29a0f6b93eb.jpg" style="width:100%; max-height: 60vh;">
                                   </div>
                                   <!-- Caption text -->
                                   <div class="row nopad">
                                   <div class="caption-container">
                                     <div class="row nopad">
                                       <div class="col-md-12 nopad center">
                                         <p class="captionus" id="caption3"></p>
                                         <!-- next controls -->
                                         <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                         <!--   previous controls -->
                                         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                       </div>

                                      </div>
                                    </div>
                                  </div>

                                  </div>
                                 <div class="col-md-4 pad">
                                   <div class="desccont">
                                  <h3 class="modalush3">Description of Property</h3>
                                   <p class="modalusp">3-bed detached house fully furnished with outstanding investment possibilities</p>
                                   <p class="modalusp"><i class="fas fa-bed"></i>  3 bedrooms</p>
                                   <p class="modalusp"><i class="fas fa-venus-mars"></i> 2 toilets</p>
                                   <p class="modalusp"><i class="fas fa-bath"></i> 1 bathroom</p>
                                   <p class="modalusp"><i class="fab fa-envira"></i> 1 enormous living room</p>
                                   <p class="modalusp"><i class="fab fa-expeditedssl"></i> 1 shed with lock</p>
                                   <p class="modalusp"><i class="fas fa-money-bill-alt"></i> Price: <span class="price">&pound;170 000</span></p>
                                   <p class="modalusp"><i class="fas fa-chart-line"></i> Yield: <span class="price">15%</span></p>
                                 </div>
                                 <br>
                                 <!-- Enquiry -->
                                 <div class="desccont center">

                                   <div class="contact disp" onclick="formchoice(3)">Contact Now</div>

                                   <div id="contactForm3">

                                     <h1>Interested?</h1>
                                     <small>Get in touch and we will respond as quick as possible!</small>

                                     <form class="centerform" action="#">
                                       <input placeholder="Name" type="text" required />
                                       <input placeholder="Email" type="email" required />
                                       <input placeholder="Subject" type="text" value="DynamicAssignIDofProperty" required />
                                       <textarea placeholder="Comment"></textarea>
                                       <input class="formBtn" type="submit" />
                                       <input class="formBtn" type="reset" />
                                     </form>

                                 </div>

                                 </div>
                                 </div>
                               </div>


                               </div>

                            <div class="col-md-12">
                               <!-- Thumbnail image controls -->
                               <div class="responsive3">
                                   <div>
                                     <img class="imgthumb3 imgthumbsize" src="http://stoneintl.net/wp-content/uploads/2017/05/The-Best-Kitchen-Cabinets.jpg" onclick="currentSlide(1)" alt="Description under picture">
                                   </div>

                                   <div>
                                     <img class="imgthumb3 imgthumbsize" src="https://mr3.homeflow-assets.co.uk/files/site_asset/image/3475/6318/_x_/PUT170080_05.jpg" onclick="currentSlide(2)" alt="Description under picture;Description under picture">
                                   </div>

                                   <div>
                                     <img class="imgthumb3 imgthumbsize" src="https://i.pinimg.com/originals/47/22/a5/4722a5e8b1f1c10f7887e29a0f6b93eb.jpg" onclick="currentSlide(3)" alt="Description under picture;Description under picture">
                                   </div>
                              </div>


                            </div>
                            </div>
                            </div>
                            </div>
                            <!-- END The Modal/Lightbox 3 -->

                            <!-- END Modal Galleries -->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end block__wrapper-->
                </div>
                <!--end container-->
            </section>
            <!--end #pricing.block-->


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
