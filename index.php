<?php
	include "header.php"
?>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <!-- navber -->
			<?php
				include "menu.php"
			?>
            <!-- /.nav end -->
            <div class="slider-wrapper">
                <div class="responisve-container">
                    <div class="slider">
                        <div class="fs_loader"></div>
                        <div class="slide">
                            <p class="uc" data-position="210,360" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">Welcome to </p>
                            <p class="slider-titele" data-position="270,200" data-in="left"  data-step="2" data-delay="100">Saniya International</p>
                            <p class="slider-titele" data-position="330,230" data-in="left"  data-step="2" data-delay="100"> Holidays & Travels</p>
                           <!-- <p class="slider-text" data-position="270,100" data-in="bottom" data-out="right" data-step="2" data-delay="1000">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br>
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took  
                            </p>-->
                            <!--<a href="#" class="thm-btn" data-position="390,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>-->
                        </div>
                        <div class="slide">
                            <p class="uc" data-position="210,360" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">We Provide </p>
                            <p class="slider-titele" data-position="270,360" data-in="left"  data-step="2" data-delay="100"> Excellent</p>
                            <p class="slider-titele" data-position="330,270" data-in="left"  data-step="2" data-delay="100"> Travel Services</p>
                            <!--<a href="#" class="thm-btn" data-position="390,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- booking -->
            <div class="container boking-inner">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active" style="width: 100%;text-align: center;"><a href="#tab1default" data-toggle="tab" style="font-size:18px;font-weight:bold;">Find Your Tour</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-10">
                                                <div class="row panel-margin">
													<form method="post" action="holiday-package.php">
                                                    <div class="col-md-12 panel-padding">
														<label>Price Between</label>
													</div>
                                                    <div class="col-xs-6 col-sm-4 col-md-6 panel-padding">
                                                        
                                                       <div class="select-filters">
                                                            <select name="str" id="str">
                                                                <option value="" >Select</option>
                                                                <option value="5000" >5000</option>
                                                                <option value="15000">15000</option>
                                                                <option value="25000">25000</option>
                                                                <option value="50000">50000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-6 panel-padding">
                                                       
                                                       <div class="select-filters">
                                                            <select name="end" id="end">
																<option value="" >Select</option>
                                                                <option value="15000" >15000</option>
                                                                <option value="25000">25000</option>
                                                                <option value="50000">50000</option>
                                                                <option value="100000">100000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-2">
                                                <button type="submit" class="thm-btn" name="search">Search</button>
                                            </div>
											</form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- popular tour -->
            
            <!-- service -->
            <section class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Our Service</h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-airplane-flight-in-circle-around-earth"></span></div>
                                    <div class="content-text">
                                        <h5 style="font-size: 22px;">Air / Train <br/>Tickets</h5>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing.</p> -->
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-map"></span></div>
                                    <div class="content-text">
                                        <h5 style="font-size: 22px;">Fast <br/>Booking</h5>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing.</p> -->
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-chinese-temple"></span></div>
                                    <div class="content-text">
                                        <h5 style="font-size: 22px;">Hotel Reservation International & Domestic</h5>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing.</p> -->
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-car"></span></div>
                                    <div class="content-text">
                                        <h5 style="font-size: 22px;">Car Rental and Sightseeing</h5>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing.</p> -->
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- destination -->
            <section class="destination">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Destination</h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/singapore-370x370.jpeg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Singapore</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Sydney Opera House</h5> -->
                                    <h4>Singapore</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/doi-inthanon-national-park-chiang-mai-thailand-001-370x370.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Thailand</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Fernando de Noronha</h5> -->
                                    <h4>Thailand</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/dubai.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Dubai</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Aya Sofya</h5> -->
                                    <h4>Dubai</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/Goa-370x370.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Goa</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Taj Mahal</h5> -->
                                    <h4>Goa</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/Ladakh.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Ladakh </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Canals of Venice</h5> -->
                                    <h4>Ladakh </h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/dest_bhutan-370x370.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Bhutan </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Eiffel Tower</h5> -->
                                    <h4>Bhutan </h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/Spitivalley.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Spiti valley</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Hop on Hop off Bus Tour</h5> -->
                                    <h4>Spiti valley</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 hidden-sm thm-padding">
                            <div class="destination-grid">
                                <a href="#"><img src="assets/images/UTTARAKHAND-370x370.jpg" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2>Uttarakhand</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                    <a href="#" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <!-- <h5>Hop on Hop off Bus Tour</h5> -->
                                    <h4>Uttarakhand</h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hotel -->
            
            <!-- Testimonial section -->
            <div class="reference home-ref">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Testimonial</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="testimonials">
                            <div class="carousel" data-ride="carousel" id="quote-carousel">
                                <div class="carousel-inner">
                                    <!-- Quote 1 -->  
                                    <div class="item col-sm-10 col-sm-offset-1 active">
                                        <blockquote>
                                            The arrangement was really nice.  We have enjoyed the trip. Starting from the car, everything was perfect. Driver also cooperate with us  We really enjoyed the trip.  The hotel which was provided for accommodation was amazing. Thanks you for Helping us create Beautiful Memories.
                                            <span class="author">- Alfiya Shaikh</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 2 -->  
                                    <div class="item col-sm-10 col-sm-offset-1">
                                        <blockquote>
                                           Our Honeymoon trip was great in Kerala and the trip designer at this travel company was the best and  very helpful. We will Surely recommend your service to others.. Thanks for making our trip best..
                                            <span class="author">- Ashfaque Khan</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                            Amazing trip! Highly recommend this company.
											
											Overall, the trip to Amritsar - Dalhousie - Dharamshala was very well organized. Drivers and pickup was very punctual on time, it was nice services amazing experience with this Travel company.
                                            <span class="author">- Simran Shaikh</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                            Had a great experience with this agency....One of my friend recommended me and I really went for quotation purpose, but the way that guy explained me about the package and services was pretty cool. I booked for Singapore and the journey Allahamdulilah went amazing. 
											
											Wanna make you vacation easy and hassle free #MustTry
                                            <span class="author">- Shahbaz Shaikh</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                           Very good service. Hotels offer by them are really good. Perfect value for money. Fully satisfied with your service.
                                            <span class="author">- Neha Shaikh</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                           Had so much fun, made lots of memories enjoyed every bit of the journey. Wonderful experience with good service at affordable prices.
                                            <span class="author">- Farhan Khan</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                           Our Trip to Shimla / Manali was fantastic. Hotel they have suggested neat & clean.. vehicle was in good condition thanks for giving such a great service .
                                            <span class="author">- Neha Shaikh Neha</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                           Very well planned itinerary with great service for our Maldives tour thank you So much..
                                            <span class="author">- Sahil Mulla</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                           All the arrangements were made as per our request . whole tour was smooth
                                            <span class="author">- Seema Khan</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                           Had great experience in Dubai, I really appreciate their service.Thanks for make my trip memorable.
                                            <span class="author">- Kamran khan</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 ">
                                        <blockquote>
                                           It was a good experience with this travel company who made our kerala trip a memorable one. Their price is most competitive in market and service is just superbb.
                                            <span class="author">- subi shaikh</span>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#quote-carousel" data-slide-to="1" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="2" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="3" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="4" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="5" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="6" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="7" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="8" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="9" class=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="10" class=""></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- package section -->
            <section class="package">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Latest Tour Package</h2>
                                <p>A great Collection of our Tour Packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-1.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Bhutan Package</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Bhutan Package</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">Rs.50000</span>
                                        </span>
                                        /10 night 11 Days
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-2.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Dubai Package</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Dubai Package</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">Rs 3000</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <!-- <div class="ribbon"><span>Popular</span></div> -->
                                        <img src="assets/images/Package-800x500-3.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Goa Package</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Goa Package</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">Rs. 1500</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-4.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Kerala Package</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Kerala Package</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">Rs 30000</span>
                                        </span>
                                        4 Nights 5 Days
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-5.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Ladakh</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Ladakh</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">Rs. 5000</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <!-- <div class="ribbon"><span>New</span></div> -->
                                        <img src="assets/images/Package-800x500-6.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Singapore Package</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Singapore Package</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">1 Lakh.</span>
                                        </span>
                                        /Couple
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-7.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Spiti valley package</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Spiti valley package</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">Rs 1000</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-8.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Thailand Package</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Thailand Package</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">Rs 5000</span>
                                        </span>
                                        /night
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter -->
            <section class="counter-inner" style="display:none;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-earth-globe"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">348</h1>
                                    <div class="count-text">Destinations</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-cabin"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">89</h1>
                                    <div class="count-text">Hotels</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">987</h1>
                                    <div class="count-text">Tourists</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="count-content">
                                <div class="count-icon">
                                    <i class="flaticon-airplane-flight-in-circle-around-earth"></i>
                                </div>
                                <div class="count">
                                    <h1 class="count-number">891</h1>
                                    <div class="count-text">Tour</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog section -->
            
            <!-- Newsletter -->
            
        </div>
        <!-- Footer Section -->
<?php
	include "footer.php"
?>
        
        <!-- jQuery -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <!-- jquery ui js -->
        <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- fraction slider js -->
        <script src="assets/js/jquery.fractionslider.js" type="text/javascript"></script>
        <!-- owl carousel js --> 
        <script src="assets/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- counter -->
        <script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/js/waypoints.js" type="text/javascript"></script>
        <!-- filter portfolio -->
        <script src="assets/js/jquery.shuffle.min.js" type="text/javascript"></script>
        <script src="assets/js/portfolio.js" type="text/javascript"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!-- range slider -->
        <script src="assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
        <!-- custom -->
        <script src="assets/js/custom.js" type="text/javascript"></script>
    </body>
</html>