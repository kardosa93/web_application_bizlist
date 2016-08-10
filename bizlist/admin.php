<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: authentication.php");
}
?>
<?php
	include('header.php');
?>
			<div class="header-nav">
					<div class="wrap">
					<div class="left-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="listing.php">Business Listing</a></li>
							<li><a href="submit.php">Submit Business</a></li>
							<li><a href="tutor.php">Tutor Page</a></li>
							<li class="active"><a href="admin.php">Admin</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<!---end-header---->
			<div class="wrap">
					<!---start-content---->
					<div class="content">
					<div class="services">	
					<h5>ADMIN LOGIN</h5>	
					</div><br />
					
						<div class="login-form">

							<form action="" method="POST">
							<span><label>USERNAME</label></span>
							<span><input type="text" name="username" id="username" value=""/></span><br />
							<span><label>PASSWORD</label></span>
							<span><input type="password" name="password" id="password" value=""/><span><br />
							<span><input type="submit" name="submit" value="Login" /><span>
							<span><?php echo $error; ?></span>
							</form>						
					</div>
			<div class="clear"> </div>
			</div>
			</div>
			<!---End-content---->
			<div class="clear"> </div>
		<!---start-footer---->	
		<?php
			include('footer.php');
		?>
		<!---end-footer---->
	</body>
</html>

