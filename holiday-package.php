<?php
	include "header.php";
	if(isset($_GET["id"]))
	{
		$query = mysqli_query($conn,"select * from tbl_package where pid = '".$_GET["id"]."' and status = 1");
		$row1 = mysqli_fetch_array(mysqli_query($conn,"select * from package where id = '".$_GET["id"]."' and status = 1"));
		$package = $row1["name"];
	}
	else if(isset($_POST["search"]))
	{
		$query = mysqli_query($conn,"SELECT * FROM `tbl_package` WHERE `price` BETWEEN '".$_POST["str"]."' and '".$_POST["end"]."' and status = 1");
		
		$package = "";
	}
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
                                    <h1><?=$package; ?> Holiday Package</h1>
                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Holiday Package</div>
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
                            <div class="col-sm-8">
                                <div class="hotel-list-content">
									<?php
										while($row=mysqli_fetch_array($query))
										{
											if($row["img"] != "")
											{
												$img = $row["img"];
											}
											else
											{
												$img = "assets/images/hotel-7.jpg";
											}
									?>
									<div class="hotel-item">
										<!-- hotel Image-->
										<div class="hotel-image">
												<div class="img"><img src="<?=$img; ?>"  alt="" class="img-responsive"></div>
										</div>
										<!-- hotel body-->
										<div class="hotel-body">
											<div class="ratting" style="display:none;">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<!-- title-->
											<h3><?=$row["name"]; ?></h3>
											<!-- Text Intro-->
											<p>Valid For: <?=$row["valid_for"]; ?></p>
											<p>Valid Till: <?=$row["valid_till"]; ?></p>
											<div class="free-service" >
												<i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
												<!--<i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i><i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>-->
												<i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
												
												<i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
											</div>
										</div>
										<div class="hotel-right"> 
											<div class="hotel-person">from <span class="color-blue"><?=$row["price"]; ?></span>Rs. <?=$row["days"]; ?></div>
											<a class="thm-btn" href="enquiry.php?id=<?=$row["id"]; ?>">Enquiry Now</a>
										</div>
									</div>
									<?php
										}
									?>


								</div>
                               
                                
                            </div>
                            <div class="col-md-4">
								<div class="sidber-box help-widget">
									<i class="flaticon-photographer-with-cap-and-glasses"></i>
									<h4>Need <span>Help?</span></h4>
									<a href="#" class="phone">+91 81082 76501</a>
									<small>Monday to Friday 9.00am - 7.30pm</small>
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