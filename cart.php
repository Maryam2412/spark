<?php
if (isset($_POST['delete'])) {
    include("db_connection.php");

    $id = $_POST['delete'];

    $sql = mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$id'");

    if ($sql) {
        header("Location: cart.php");
        exit();
    } else {
        echo "<script>alert('could not be deleted')</script>";
    }
}
?>


<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart || Spark</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/s.png">
        

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
       
		
		<!-- header start -->
        <header class="header-pos">
			<!-- header-bottom-area start -->
			<div class="header-bottom-area">
				<div class="container">
					<div class="inner-container">
						<div class="row">
							<div class="col-md-2 col-sm-4 col-xs-5">
								<div class="logo">
									<a href="index.php"><img src="img/spark-logo.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-8 hidden-xs hidden-sm">
								<div class="main-menu">
									<nav>
										<ul>
											<li><a href="index.php">home</a>
											</li>
											<li><a href="about.php">about</a></li>
											<li><a href="#">store</a>
												<div class="mega-menu mega-menu-2">											
													<span>
														<a href="#" class="mega-title">control automation </a>
														<a href="capacitors-store.php">capacitors</a>
														<a href="contactors-store.php">contactors</a>
														<a href="relay-store.php">relays</a>
														<a href="fuses-store.php">fuses </a>
													</span>
													<span>
														<a href="#" class="mega-title">switches </a>
														<a href="gridswitch-store.php">grid switches</a>
														<a href="switchgears-store.php">switchgearst</a>
														<a href="mcb-store.php">mcb's </a>
														
													</span>
													<span>
														<a href="#" class="mega-title">other items </a>
														<a href="lighting-store.php">lighting </a>
														<a href="heating-store.php">heating </a>
														
													</span>
													<span class="mega-menu-img">
														<a href="shop.php"><img alt="" src="img/about_pics/store-image.png"></a>
													</span>
												</div>											
											</li>
											<li><a href="contact.php">contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-md-2 col-sm-8 col-xs-7 header-right">
								<div class="my-cart">
									<div class="total-cart">
										<a href="cart.php">
											<i class="fa fa-shopping-cart"></i>
											<span>2</span>
										</a>								
									</div>
									<ul>
										<li>
											<a class="cart-button" href="cart.php">view cart</a>
											<a class="checkout" href="checkout.php">checkout</a>
										</li>
									</ul>
								</div>
								<div class="user-meta">
									<a href="#"><i class="fa fa-cog"></i></a>
									<ul>
										<li><a href="login.php">My Account</a></li>
										
										<li><a href="checkout.php">Checkout</a></li>
										
										<li><a href="login.php">Log in</a></li>
									</ul>								
								</div>
								<div class="header-search">
									<i class="fa fa-search"></i>
									<div class="header-form">
										<form action="#">
											<input type="text" placeholder="search" />
											<button><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-bottom-area end -->
			<!-- mobile-menu-area start -->
			<div class="mobile-menu-area visible-xs visible-sm">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.php">Home</a>
											
										</li>
										<li><a href="about.php">About</a></li>
									
										<li><a href="#">Store</a>
											<ul>
												<li><a href="#">control automation</a>
													<ul>
														<li><a href="capacitors-store.php">capacitors</a></li>
														<li><a href="contactors-store.php">contactors</a></li>
														<li><a href="relay-store.php">relays </a></li>
														<li><a href="fuses-store.php">fuses</a></li>
													</ul>
												</li>
												<li><a href="#">switches</a>
													<ul>
														<li><a href="gridswitch-store.php">grid switches</a></li>
														<li><a href="switchgears-store.php">switchgears</a></li>
														<li><a href="mcb-store.php">mcb's </a></li>
														
													</ul>
												</li>
												<li><a href="#">other items</a>
													<ul>
														<li><a href="lighting-store.php">lighting </a></li>
														<li><a href="heating-store.php">heating</a></li>
														
													</ul>
												</li>											
											</ul>
										</li>
										
										
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area end -->				
		</header>
		<!-- header end -->
		<!-- breadcrumb-area start -->
		<div class="breadcrumb-area-cart">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list">
							<h1>Shopping Cart</h1>
							<ul>
								<li><a href="index.php">home</a> <span class="divider">|</span></li>
								<li><a href="cart.php">Shopping cart</a> <span class="divider">|</span></li>
								<li>Shopping cart</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area end -->
		<!-- cart-main-area start -->
		<div class="cart-main-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<form action="#">				
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
											<th class="product-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
									<?php
                        include("db_connection.php");

                        $sql = mysqli_query($conn, "SELECT * FROM `cart`");

                        if (mysqli_num_rows($sql) > 0) {
                            $ids = 0;
                            foreach ($sql as $id) {
                                $ids = $id['id'];
                            }
                            foreach ($sql as $row) {
                        ?>
                        <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td><?= $row['image'] ?></td>
                                    <td><?= file_exists($row['image']) ? "Image exists" : "Image does not exist" ?></td>

                                    <td><?= $row['price'] ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <button name="delete" value="<?= $row['id'] ?>" class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                    <td><?= $row['created_at'] ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-7 col-xs-12">
									<div class="buttons-cart">
										<input type="submit" value="Update Cart" />
										<a href="index.php">Continue Shopping</a>
									</div>
									<div class="coupon">
										<h3>Coupon</h3>
										<p>Enter your coupon code if you have one.</p>
										<input type="text" placeholder="Coupon code" />
										<input type="submit" value="Apply Coupon" />
									</div>
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
		<!-- cart-main-area end -->	
		<!-- brand-area start -->
		<div class="brand-area">
			<div class="container">
				<div class="brand-inner-container pad-60">
					<div class="row">
						<div class="brand-curosel">
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/abb.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/honeywell.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/legrand.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/littlefuse.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/omron.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/siemens.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/phonex.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/mitsubishi.png" alt="" /></a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-brand">
									<a href="#"><img src="img/brand/rockwell.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- brand-area end -->
		
		<!-- footer start -->
		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-logo">
								<img src="img/spark-logo.png" alt="" />
								<p>Spark is your ultimate destination for all things lab automation. <br /> From robotic systems to software integration, we cover a wide range of topics aimed at revolutionizing the way labs operate. <br/> Join us at Spark and ignite innovation in your laboratory today.</p>
								<div class="widget-icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-vimeo-square"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area start -->
			<div class="footer-top-area">
				<div class="container">
					<div class="row">
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="footer-widget">
								<h3>CONTACT US</h3>
								<ul class="footer-contact">
									<li>
										<i class="fa fa-map-marker"> </i>
										Addresss: City of Karachi, North Nazimabad, Aptech NN2
									</li>
									<li>
										<i class="fa fa-envelope"> </i>	
										Email: spark@electrics.com
									</li>
									<li>
										<i class="fa fa-phone"> </i>
										Phone: +92 (305) 5678431
									</li>
								</ul>
							</div>
						</div>
						<!-- footer-widget end -->					
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 hidden-sm">
							<div class="footer-widget">
								<h3>My account</h3>
								<ul class="footer-menu">
									<li><a href="checkout.php">Order Status</a></li>
									<li><a href="login.php">Register</a></li>
									<li><a href="login.php">Sign-up</a></li>
									<li><a href="checkout.php">Payment Options</a></li>
								</ul>
							</div>
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="footer-widget">
								<h3>about us</h3>
								<ul class="footer-menu">
									<li><a href="checkout.php">Payment</a></li>
									<li><a href="thank-you.php">feedback</a></li>
									<li><a href="about.php">About Us</a></li>
									<li><a href="contact.php">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<!-- footer-widget end -->
						<!-- footer-widget start -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="footer-widget">
								<h3>Appliance tags</h3>
								<div class="product-tag">
									<ul>
										<li><a href="#">Top</a></li>
										<li><a href="#">Saver</a></li>
										<li><a href="#">Switchgear</a></li>
										<li><a href="#">Fuse</a></li>
										<li><a href="#">Capacitor</a></li>
										<li><a href="#">MCB's</a></li>
										<li><a href="#">Contactor</a></li>
										<li><a href="#">Relay</a></li>
										<li><a href="#">Lighting</a></li>
										<li><a href="#">Heater</a></li>
										<li><a href="#">Registor</a></li>										
										<li><a href="#">best</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- footer-widget end -->						
					</div>
				</div>
			</div>
			<!-- footer-top-area end -->
			<!-- footer-bottom-area start -->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="copyright">
								<p>Copyright © <a href="#">Spark</a>. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="payment-img">
								<img src="img/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom-area end -->			
		</footer>
		<!-- footer end -->

		


<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="productModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Marley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interestedMarley tried to convince her but she was not interested
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>	

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>	
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>
