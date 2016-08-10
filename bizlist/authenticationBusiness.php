<?php 
	Include("authenticationQuery.php");
?>
<?php 
	Include("displayBusiness.php");
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
							<li><a href="admin.php">Admin</a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<!---end-header---->
			<div class="wrap">
					<!---start-content---->
					<div class="content">
						<div class='section group'>
						
						<?php
						
						   if ( isset($_GET['id']) ) 
						   {
							 $id = $_GET['id'] ; 
							}
							else
							{
							  $id = 1 ;
							}
							echo display($id);	
						?>
						<?php	?>
						<div class="clear"> </div>
						<div class='bar'>						
							<div id="authenticationBar">
								<ul id="authenticationButtons">
									<li><a class="athBtn" href="authenticationApprove.php?id=<?php echo $id ?>">Approve</a></li>
									<li><a class="athBtn" href="authenticationDeny.php?id=<?php echo $id ?>">Deny</a></li>
								</ul>
							</div>
						</div>
						
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

