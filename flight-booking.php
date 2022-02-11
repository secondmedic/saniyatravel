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
			<!-- page header -->
            <section class="header header-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Flight Booking</h1>
                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Flight Booking</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about section -->
			<section class="about-section">
                <!-- about section -->
                <div class="about-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 contact-form">
                                <div class="row">
										
										<div class="row">
											<div class="col-md-12">
												<div class="col-sm-6">
													<div class="form-group">
														<label>Ticket Type</label>
														<div class="select-filters">
															<select name="person" id="person">
																<option value="">Select</option>
																<option value="Domestic">Domestic</option>
																<option value="International">International</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Tour Type</label>
														<div class="select-filters">
															<select name="person" id="person">
																<option value="">Select</option>
																<option value="Domestic">One Way</option>
																<option value="International">Round Trip</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label>Departure Date</label>
														<input type="text" placeholder="Departure Date" class="form-control" id="datepicker1"/>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label>Return Date</label>
														<input type="text" placeholder="Return Date" class="form-control" id="datepicker1"/>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label>Adult</label>
														<div class="select-filters">
															<select name="person" id="person">
																<option value="" selected="">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="form-group">
														<label>Children</label>
														<div class="select-filters">
															<select name="child" id="child">
																<option value="" selected="">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Destination from</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Destination from">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Destination to</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Destination to">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Enter your First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Enter Your Last Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                            </div>
                                        </div>
										<div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
												<textarea class="form-control" id="message" name="message">
												
												</textarea>
                                            </div>
                                        </div>
										<div class="col-sm-12">
                                            <div class="form-group">
                                                <a href="#" class="thm-btn">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
			</section>
		</div>
        <!-- Footer Section -->
			<?php
				include "footer.php"
			?>
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