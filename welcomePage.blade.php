<!DOCTYPE html>
<html>
<head>
	<title>Ayenics</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="../assets/css/styles.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>

	<div class="wrapper">

		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="navbar">
			<div class="container">
				<a href="#" class="navbar-brand">Ayenics Arts n Crafts</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav">

					</div>
					<div class="navbar-nav ml-auto">         
						<a href="#" class="nav-item nav-link">Home</a>
						<a href="#events" class="nav-item nav-link">Events</a>
						<a href="#" class="nav-item nav-link">Contact</a>
						<a href="{{ url('cart')}}" class="nav-item nav-link">Cart <span>0</span></a>
						<a href="{{ url ('/home')}}" class="nav-item nav-link">Login</a>
					</div>
				</div>
			</div>

		</nav>
		<div class="welcome"></div>
			

	

		<!-- landing-row -->
		<div class= "landing col-sm-12 col-md-12 col-lg-12 py-2">

			<div class="division row">

				<div class="col-sm-12 col-md-1 col-lg-1"></div>
				<div class="col-sm-12 col-md-10 col-lg-10">

					<div class="row landing-row">

						<div class="landing-col col-sm-12 col-md-6 col-lg-6 mt-5">
								<div class="row-landing-photo">
									<div class="col-landing-photo col-sm-12 col-md-12 col-lg-12">
										<img src="../assets/images/ayenics4.jpg">
									
									</div>
								</div>

							</div>
						
							<div class="landing-col col-sm-12 col-md-1 col-lg-1"></div>

							<div class="landing-col col-sm-12 col-md-5 col-lg-5 mt-5">
							<h4 class="py-2 mb-0">Faux Barrel</h4>
							<small>by Ayenics Arts n Crafts</small>
							<h5 class="price-icon my-4">&#8369<span class="price">5,000.00</span></h5>
							<p class="description">Product Details</p><hr>
							<p class="description-content text-justify">Our main product is a contemporary rustic faux barrel that has a feeling of both fresh and real, light and grounded and artistically made. </p>
							

							<p class="description mt-5">Designer Information</p><hr>
							<p class="description-content text-justify">Ayenics Arts and Crafts started year 2015 by Ayen Quias and Noel Nicolas, where the name derived from.  Both are freelance visual artist who are fascinated by something old and something modern in combination.  The then tandems and creative thinking are now a business entity manufacturing styling props for event caterers and stylish. </p>

							

							<div class="text-center mt-5">

								<a class="btn order-button py-2 px-5" href="{{ url('cart')}}">Order Now</a>
									
								</div>

							</div>

						</div>
					</div> 

					<div class="col-sm-12 col-md-1 col-lg-1"></div>

				</div>	

			</div><!-- end of landing-row -->

			<div class="container decoration mb-5">
				<h2 class="mt-5 text-center">How to use</h2>
				<h5 class="deco-text text-center">Interesting ways to decorate with barrels</h5>
				<div class="row mt-5">
					<div class="col-sm-12 col-md-1 col-lg-1"></div>

					<div class="col-sm-12 col-md-10 col-lg-10">
						<div class="row">
							<div class="decoration-photo col-sm-12 col-md-6 col-lg-6">
								<img src="../assets/images/decoration2.jpg">
								<div class="deco-content">
									<h5 class="text-center mt-5">We Design</h5>
									<h5 class="text-center mt-5">We Create</h5>
									<h5 class="text-center mt-5">We Deliver</h5>
								</div>
								<img src="../assets/images/decoration5.jpg">
							</div>
							
							<div class="decoration-photo-2 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12">
											<img src="../assets/images/decoration1.jpg">
										</div>
										
									</div>

									<div class="row">
										<div class="col-sm-12 col-md-2 col-lg-2"></div>
										<div class="col-sm-12 col-md-8 col-lg-8">
											<p class="deco-text text-justify mt-5">
											Barrels are amazing for wedding decoration whether you are planning a vineyard, backyard or rustic wedding. A barrel may be used as a table leg, cake stand, photo stand; it’s perfect for placing any kind of flower arrangements or decorations. Side tables, centerpieces, aisle and reception decor – barrels can be incorporated everywhere, and you can even make a use it with other occassions. Our barrel aren’t only awesome-looking but also very budget-friendly.</p>
										</div>
										
										<div class="col-sm-12 col-md-2 col-lg-2"></div>
									</div>

									</div>
									
								</div>
							
							</div>
						</div>
						
					</div>
					<div class="col-sm-12 col-md-1 col-lg-1"></div>
				</div>
			</div> <!-- end of decoration -->



			<div class="container">
				<div class="card-deck mechanics-container">
				
				<div class="row">
					<div class="card mechanics-div col-sm-12 col-md-4 col-lg-4">

						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
							<i class="fas fa-car-side fa-4x mt-2"></i>

							<p class="mechanics-item text-left mt-5">Do you need a barrel for your rustic event but opt to a one that is easy to transport? Look no more!<p/>
                			<p class="mechanics-item text-left">Our faux barrel is lightweight and can fit in a car. It is aesthetically designed and laid out to achieve an instagrammable moment!</p>
                			<ul class='text-left'>
                				<li>Get the barrel at a Pick up Point.</li>
                				<li>Place an Order for Delivery to a Pick up Point.</li>
                			</ul>

                			</div>

						</div>
						
					</div>

					<div class="card mechanics-div1 col-sm-12 col-md-4 col-lg-4">

						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
							<i class="far fa-credit-card fa-4x mt-2"></i>

							<p class="mechanics-item text-left mt-5">Payment Terms<p/>
								<p class='text-left'>Shipping Rates</p>
                				<ul class="text-left">
                					<li>Cash on Delivery.</li>
                					<li>Pay via LBC Remittance/Palawan Express/JRS Express only.</li>
                					<li>Bank Transfer</li>
                					<li>Credit Card Payment</li>
                				</ul>
                			</div>
						</div>
						
					</div>

					<div class="card mechanics-div2 col-sm-12 col-md-4 col-lg-4">

						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
							<i class="fas fa-pencil-ruler fa-4x mt-2"></i>

							<p class="mechanics-item text-center mt-5">We Design, We Create<p/>
                			<p class="mechanics-item text-center"></p>
                			</div>
						</div>
						
					</div>

										
				</div>
				</div>
			</div>

			
			<div class="container gallery" id="events">

				<h2 class="text-center py-5">You may also be interested in</h2>

				<div class="card-deck ">

					<div class="row">
					
					<div class="card item-card col-lg-3 col-md-3 col-sm-12 ">
						<div class="gallery_item">
							<div class="img_item">
								<img class="img-fluid" src="../assets/images/wood1.jpg" alt="">
								<p class="img-fluid-content text-center">WOODWORKS</p>
								<p class="img-fluid-description text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								</p>
							</div>

						</div>
					</div>

					

					<div class="card item-card col-lg-3 col-md-3 col-sm-12 ">
						<div class="gallery_item">
							<div class="img_item">
								<img class="img-fluid" src="../assets/images/painting.jpg" alt="">
								<p class="img-fluid-content text-center">ORIGINAL PAINTINGS</p>
								<p class="img-fluid-description text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								</p>
							</div>

						</div>
					</div>

					<div class="card item-card  col-lg-3 col-md-3 col-sm-12">
						<div class="gallery_item">
							<div class="img_item">
								<img class="img-fluid" src="../assets/images/papermache.jpg" alt="">
								<p class="img-fluid-content text-center">PAPER MACHE</p>
								<p class="img-fluid-description text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed 
								
								
								</p>
							</div>

						</div>
					</div>

					<div class="card  item-card col-lg-3 col-md-3 col-sm-12 ">
						<div class="gallery_item">
							<div class="img_item">
								<img class="img-fluid" src="../assets/images/wood2.jpg" alt="">
								<p class="img-fluid-content text-center">WEDDING FAVORS</p>
								<p class="img-fluid-description text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								</p>
							</div>

						</div>
					</div>

					
				</div>
					
				</div>

			</div> <!-- end of gallery -->

	</div>

	<footer id="contact">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4 mt-5 mb-5">
					<p class="ml-4 mb-5">Customer Care</p>
					<small><a href="" >How to Buy</a></small><br>
					<small><a href="" >Shipping and Delivery</a></small><br>
					<small><a href="">Question?</a></small><br>
					<small><a href="">Contact Us</a></small><br>
					<small><a href="">Terms and Conditions</a></small>
				</div>

				<div class="col-sm-12 col-md-4 col-lg-4 mt-5 mb-5 text-center">
					<p class="mb-5">Follow Us</p>
					<div class="icon text-center">
						<a href=""><i class="fab fa-facebook-f fa-2x"></i></a>
					</div>
					<div class="icon text-center">
						<a href=""><i class="fab fa-instagram fa-2x"></i></a>
					</div>

				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 mt-5 mb-5">
					<p class="footer-content">&copyAyenics Arts n Crafts 2019</p>	
				</div>
			</div>
		</div>
		

	</footer>
		

	<script type="text/javascript". src="../assets/js/script.js"></script>


</body>


</html>