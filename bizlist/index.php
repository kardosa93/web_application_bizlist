<?php
	include('header.php');
?>
			<div class="header-nav">
				<div class="wrap">
					<div class="left-nav">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="listing.php">Business Listing</a></li>
							<li><a href="submit.php">Submit Business</a></li>
							<li><a href="tutor.php">Tutor Page</a></li>
							<li><a href="admin.php">Admin</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<!--end-header-->
			<!--start-image-slider-->
			<div class="wrap">
					<!---start-content-->
					<div class="content">
					<div class="services">
				<div class="section group">
					<div class="intro">					
					<p>Welcome to our brand new website! </p><br/>
					<p>You don’t know where and how to advertise YOUR business? makeAdifference is here to help YOU!</p><br/>
					<p>We guarantee that your advertisement will be available for everyone, everywhere.</p><br/>
					<p>The cheapest prices available on the market!</p><br/>
					<p>Advertise with us HERE and TODAY!</p><br/>
					</div>	
					<div class="clear"> </div><br/>
					<h5>Premium Business</h5><br/>
				</div>
							<?php include ('displayPremium.php'); ?>
						</div>
					</div>
					<!--End-content-->
					<div class="clear"> </div>
			</div>
		<!--start-footer-->
		<?php
			include('footer.php');
		?>
		<!--end-footer-->
	</body>
</html>

