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
					<div class="services">	
					<h5>AUTHORIZED BUSINESS</h5>	
					<br />
							<?php
							$id = $_GET['id'];

								try {
									Include("connect_pdo.php");

									$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
									$sql = "UPDATE `businessTable` SET `status` =  'approved' WHERE `id` =$id";
									// use exec() because no results are returned
									$db->exec($sql);
									echo "</div>";
									echo "<div class='authentication-form'>";
									echo "<div class='services'>";
									echo "<h5>Business Approved</h5></div><br />";
									$link = 'location.href="authentication.php"';
									echo "<input type=button onClick='$link' value='GO BACK'/>";
									echo "</div>";
									}
								catch(PDOException $e)
									{
									echo $sql . "<br>" . $e->getMessage();
									}
									$db = null;
							?>
					</div>
			</div>
			<div class="clear"> </div>
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

