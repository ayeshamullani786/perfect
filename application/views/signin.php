<!-- Navigation -->
<div class="agiletopbar">
	<div class="wthreenavigation">
		<div class="menu-wrap">
			<nav class="menu">
				<div class="icon-list">
					<a href="mobiles.html"><i class="fa fa-fw fa-mobile"></i><span>Mobiles</span></a>
					<a href="electronics-appliances.html"><i class="fa fa-fw fa-laptop"></i><span>Electronics and appliances</span></a>
					<a href="cars.html"><i class="fa fa-fw fa-car"></i><span>Cars</span></a>
					<a href="bikes.html"><i class="fa fa-fw fa-motorcycle"></i><span>Bikes</span></a>
					<a href="furnitures.html"><i class="fa fa-fw fa-wheelchair"></i><span>Furnitures</span></a>
					<a href="pets.html"><i class="fa fa-fw fa-paw"></i><span>Pets</span></a>
					<a href="books-sports-hobbies.html"><i class="fa fa-fw fa-book"></i><span>Books, Sports & Hobbies</span></a>
					<a href="fashion.html"><i class="fa fa-fw fa-asterisk"></i><span>Fashion</span></a>
					<a href="kids.html"><i class="fa fa-fw fa-asterisk"></i><span>Kids</span></a>
					<a href="services.html"><i class="fa fa-fw fa-shield"></i><span>Services</span></a>
					<a href="jobs.html"><i class="fa fa-fw fa-at"></i><span>Jobs</span></a>
					<a href="real-estate.html"><i class="fa fa-fw fa-home"></i><span>Real Estate</span></a>
				</div>
			</nav>
			<button class="close-button" id="close-button">Close Menu</button>
		</div>
		<button class="menu-button" id="open-button"> </button>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //Navigation -->
<!-- header -->
<header>
	<div class="w3ls-header"><!--header-one--> 
		<div class="w3ls-header-left">
			<p><a href="mobileapp.html"><i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </a></p>
		</div>
		<div class="w3ls-header-right">
			<ul>
				<li class="dropdown head-dpdn">
					<a href="signin.html" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
				</li>
				<li class="dropdown head-dpdn">
					<a href="signup.html" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign Up</a>
				</li>
				<li class="dropdown head-dpdn">
					<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
				</li>
			</ul>
		</div>
		
		<div class="clearfix"> </div> 
	</div>
	<div class="container">
		<div class="agile-its-header">
			<div class="logo">
				<h1><a href="index.html"><span>CM</span>X</a></h1>
			</div>
			<div class="agileits_search">
				<form action="#" method="post">
					<input name="Search" type="text" placeholder="How can we help you today?" required=" ">
					<select id="agileinfo_search" name="agileinfo_search" required="">
						<option value="">All Categories</option>
						<option value="Mobiles">Mobiles</option>
						<option value="Electronics & Appliances">Electronics & Appliances</option>
						<option value="Cars">Cars</option>
						<option value="Bikes">Bikes</option>
						<option value="Furnitures">Furnitures</option>
						<option value="Books, Sports & Hobbies">Books, Sports & Hobbies</option>
						<option value="Fashion">Fashion</option>
						<option value="Kids">Kids</option>
						<option value="Services">Services</option>
						<option value="Jobs">Jobs</option>
						<option value="Real Estates">Real Estates</option>
					</select>
					<button type="submit" class="btn btn-default" aria-label="Left Align">
						<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
				</form>
				<a class="post-w3layouts-ad" href="post-ad.html">Post Free Ad</a>
			</div>	
			<div class="clearfix"></div>
		</div>
	</div>
</header>
<!-- //header -->
<!-- sign in form -->
<section>
	<div id="agileits-sign-in-page" class="sign-in-wrapper">
		<div class="agileinfo_signin">
			<h3>Sign In</h3>
			<?php 
				$email=array('name'=>'email','required'=>'','placeholder'=>'Your Email','autofocus'=>'');
				$password=array('name'=>'password','required'=>'','placeholder'=>'Password');
				echo form_open('login/validate_credentials');
				echo form_input($email);
				echo form_password($password);
				echo form_submit('submit','Sign In');
				echo "<h6> Not a Member Yet? ".anchor('login/signup','Sign Up')."</h6>";
				
			?>
			<!--
				<div class="forgot-grid">
				<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
				<div class="forgot">
				<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
				</div>
				<div class="modal fade" id="myModal2" role="dialog">
				<div class="modal-dialog">
				<div class="modal-dialog modal-lg">
				<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="w3ls-password">Get Password</h3>		
				<p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>
				</div>
				</div>
				</div>
				</div>
				</div>
				<div class="clearfix"> </div>
				</div>
			-->
		</div>
	</div>
</section>
<!-- //sign in form -->
<!--footer section start--	
	<footer>
	<div class="w3-agileits-footer-top">
	<div class="container">
	<div class="wthree-foo-grids">
	<div class="col-md-3 wthree-footer-grid">
	<h4 class="footer-head">Who We Are</h4>
	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
	<p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
	</div>
	<div class="col-md-3 wthree-footer-grid">
	<h4 class="footer-head">Help</h4>
	<ul>
	<li><a href="howitworks.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>How it Works</a></li>						
	<li><a href="sitemap.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sitemap</a></li>
	<li><a href="faq.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Faq</a></li>
	<li><a href="feedback.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feedback</a></li>
	<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
	<li><a href="typography.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Short codes</a></li>
	<li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Icons Page</a></li>
	</ul>
	</div>
	<div class="col-md-3 wthree-footer-grid">
	<h4 class="footer-head">Information</h4>
	<ul>
	<li><a href="regions.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Locations Map</a></li>	
	<li><a href="terms.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
	<li><a href="popular-search.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular searches</a></li>	
	<li><a href="privacy.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy Policy</a></li>	
	</ul>
	</div>
	<div class="col-md-3 wthree-footer-grid">
	<h4 class="footer-head">Contact Us</h4>
	<span class="hq">Our headquarters</span>
	<address>
	<ul class="location">
	<li><span class="glyphicon glyphicon-map-marker"></span></li>
	<li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
	</ul>	
	<div class="clearfix"> </div>
	<ul class="location">
	<li><span class="glyphicon glyphicon-earphone"></span></li>
	<li>+0 561 111 235</li>
	</ul>	
	<div class="clearfix"> </div>
	<ul class="location">
	<li><span class="glyphicon glyphicon-envelope"></span></li>
	<li><a href="mailto:info@example.com">mail@example.com</a></li>
	</ul>						
	</address>
	</div>
	<div class="clearfix"></div>
	</div>						
	</div>	
</div>	-->
<div class="agileits-footer-bottom text-center">
	<div class="container">
		<div class="w3-footer-logo">
			<h1><a href="index.html"><span>CM</span>X</a></h1>
		</div>
		<div class="w3-footer-social-icons">
			<ul>
				<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
				<li><a class="flickr" href="#"><i class="fa fa-flickr" aria-hidden="true"></i><span>Flickr</span></a></li>
				<li><a class="googleplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google+</span></a></li>
				<li><a class="dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a></li>
			</ul>
		</div>
		<div class="copyrights">
			<p> © 2017 CMX. All Rights Reserved | Design by  <a href="http://kingmakerinfotech.com/">KingMaker Infotech</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</footer>
