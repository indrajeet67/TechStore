<!DOCTYPE HTML>
<html>
<head>
<title>Tech Store</title>
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/gui.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/gui.js"> </script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
</head>
<body>
<!--start-home-->
<!-- header_top -->
<div class="top_bg" id="home">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="signuplogout.php">Register an Account</a></li>
					<li><a href="#">
						<?php 
						error_reporting(0);
						session_start();
						$username = $_SESSION['username'];
						$id = $_SESSION['id'];
						$_SESSION['id'] = $id;
						if(isset($_SESSION['username']))
							echo '<span>Welcome -- '.$username.' </span>';					
						?></a>
					</li>					
					<li><a href="logout.php">Login / Logout</a></li>						
				</ul>
			</div>
			<div class="top_left">
				<span class="top_right"> <a class="header_top" style ="color:white;" href="feedback.php">Feedback</style></a> | Call us : +91-9967059584</span>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1>Tech<span>Store</span></h1> </a>
		  </div>
		  <div class="header_right">
			<div class="header_right">
			<div class="cart box_1">
				<a href="#">
				<div>
				<a  href="cart.php"><img src="images/cart1.png" width="80px" height="80px" /></a></div>
				<div class="clearfix"> </div> 
			</div>			 
		</div>
		<div class="clearfix"></div>	
	    </div>
		<!--start-header-menu-->
		<ul class="megamenu skyblue">
			<li><a class="color1" href="index.php">Home</a></li>
				<li><a class="color6" href="shoes.php">New Arrival</a></li>			
				<li><a class="color8" href="tshirt.php">Tool's</a></li>
				<li><a class="color9" href="watches.php">Retro</a></li>
                <li>
				<form action="#" method="post">
				</form>
				</li>
			</li>	
		 </ul>
	</div>
</div>
</div>
 <!--start-content-->
<!-- products -->
	<div class="products">
		<div class="container">
			<div class="products-grids">
				<div class="col-md-8 products-single">
				<div class="col-md-5 grid-single">		
						<div class="flexslider">
							  <ul class="slides">							  
								<?php 
								include 'connection.php';
								$product_id = $_GET['p'];
								$sql = " SELECT * FROM products ";
								$sql = " SELECT * FROM products WHERE p_id = $product_id";
								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) 
								{
									while($row = mysqli_fetch_assoc($result)) 
									{
									echo '
									<li data-thumb="'.$row['p_image'].'">
										<div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
									<li data-thumb="'.$row['p_image'].'">
										 <div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
									<li data-thumb="'.$row['p_image'].'">
									   <div class="thumb-image"> <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li> 
									</ul>
									</div>
									';
									?>
									<!-- FlexSlider -->
									<script src="js/imagezoom.js"></script>
									<script defer src="js/jquery.flexslider.js"></script>
									<script>
									// Can also be used with $(document).ready()
									$(window).load(function() {
									  $('.flexslider').flexslider({
										animation: "slide",
										controlNav: "thumbnails"
									  });
									});
									</script>
									<?php 
									echo '
									</div>	
									<div class="col-md-7 single-text">
									<div class="details-left-info simpleCart_shelfItem">
										<h3>Best Gadgets</h3>
										<p class="availability">Availability: <span class="color">In stock</span></p>
										<div class="price_single">
											<span class="actual item_price">'.$row['p_name'].'--    Rs. '.$row['p_price'].'</span>
										</div>
										<h2 class="quick">Quick Overview</h2>
										<p class="quick_desc"> The Gadget is Brand New and Comes With Warranty and this product is 100% Genuine.</p>
										
										<ul class="size">
											
										</ul>
											<div class="quantity_box">
												<span>Quantity:</span>
												<div class="product-qty">
													<select disabled>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													</select>
												</div>
											</div>
											<div class="clearfix"> </div>
											<div class="single-but item_add">
												<a class="item_add" href="addcart.php?mycart='.$row['p_id'].'&userid='.$id.'"><img height="42" width="100" src="images/cartaddbutn.png"></img> </a>	
												<a href="order.php?p='.$row['p_id'].'"><img height="46" width="100" src="images/cbuynw.png"></img></a>				
											</div>
										</div>
									</div>
									';
									$_SESSION['p_id'] = $row['p_id'];
									}
								} 
								?>								
		<div class="clearfix"></div>
	</div>
	<div class="col-md-4 products-grid-right">
					<div class="w_sidebar">
						<div class="w_nav1">
							<h4><a href="index.php">All</a></h4>
							<ul>
								<li><a href="shoes.php">New Arrival</a></li>
								<li><a href="tshirt.php">Tool's</a></li>
								<li><a href="watches.php">Retro</a></li>
							</ul>	
						</div>
						<section  class="sky-form">
							<h4></h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">
								</div>
								<div class="col col-4">									
								</div>
							</div>
						</section>
						<section  class="sky-form">
							<h4></h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">									
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- collapse -->
    <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Description
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        All The Product that you buy from us are directly comes from Brand so that's why our product's are Cheap and as well as 100% Genuine.
				<br>
				This Product has 1Year Brand Warranty if you face any kind of issues than let us know.
				<br>
				Thank You for Shopping from Us.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          reviews(15)
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
         1. I All Ways Buy Gadget's From Tech Store and this Website is just Amazing with its Unique products.
				 <br>
				 2. Cool Products
				 <br>
				 3. 5+ Stars for its Service.
				 <br>
				 4. Awesome Service products get's delivered with in 4 days.
				 <br>
				 5. All Time Favourite Website. 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          help
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        For Coustomer Support Call us on  +91-9988776655 or Email Us on help@techstore.com
      </div>
    </div>
  </div>
</div>
<!-- collapse -->
 <!--/start-latest-->
			<div class="collection-section">
		     <h3 class="tittle">Related Products</h3>
		   <div class="fashion-info">
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f1.jpg" alt=""/>
						<figcaption>
							<h4>New Arrival</h4>
							<p class="cart"><a href="Shoes.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f5.jpg" alt=""/>
						<figcaption>
							<h4>Tool's</h4>
								<p class="cart"><a href="tshirt.php">Shop</a></p>				
						</figcaption>			
					</figure>		
				</div>
				<div class="col-md-4 fashion-grids">
					<figure class="effect-bubba">
						<img src="images/f9.jpg" alt=""/>
						<figcaption>
							<h4>Retro</h4>
							<p class="cart"><a href="watches.php">Shop</a></p>							
						</figcaption>			
					</figure>		
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
       <!--//latest-->
			</div>
	</div>
<!-- //products -->
	 <!--start-bottom-->
		   <!--start-image-cursuals-->
                  <div class="scroll-slider">
                  	<div class="container"> 											 
							<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c3.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c4.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c1.png" alt=""/></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/c2.png" alt=""/></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div> 
							<div class="clearfix"> </div>      
						  <!--start-image-->
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
								<!--//end-->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 5,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 2
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 3
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
						<!---->
				  </div>				
			</div>
 <!--//end-bottom-->
		<!--start-footer-->
	     <div class="footer">
		   <div class="container">
			<div class="footer-top">
				<div class="col-md-2 footer-left">
					<h3>About Us</h3>
					<ul>
						<li><a href="feedbackshow.php">Feedback from Users</a></li>
						<li><a href="#">Contact Us</a></li>		
								 
					</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>				
		</div>
	</div>
	<ul class="socials">
	<li><a class="soc1" href="http://fb.com/indrajeet67"></a></li>
				    <li><a class="soc2" href="http://twitter.com/indrajeet67"></a></li>
				    <li><a class="soc3" href="https://github.com/indrajeet67"></a></li>
				</ul>
	 <!--/start-copyright-->
	 <div class="copy">
		<div class="container">
<p>&copy; 2018 All Rights Reserved </p>		</div>
	</div>
	 <!--//end-copyright-->
	<!--end-footer-->
 <!--//end-content-->
    	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
