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
							<li class="active"><a href="tutor.php">Tutor Page</a></li>
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
					<h5>TUTOR PAGE</h5>	<br>
								
				<div class="section group">
					<div class="info">
						<p>Login details:</p><br>
						<p>Username: admin</p>
						<p>Password: admin</p><br>
						<p>The administrator view shows only the pending pre-authorized and 
						the denied business listing submissions in two different tables. 
						Both Premium and Standard businesses are shown. After clicking on one of them,
						the moderation page appears where the admin can approve or deny the business.
						The denied ones go into the „denied” table, but they can be approved any time. 
						The authentication system only available in admin mode.</p><br>
						<p>Summary of the tables</p><br>
						<p>businessTable: contains information about each business such as name, address,
						telephone, email, info, type, category, status or transaction ID. 
						The name of the uploaded image is also stored in this table, 
						it is necessary to be able to display it when needed.</p><br>
						<p>businessPending: contains the same information as businessTable, first the data is saved in this table 
						then after the successful transaction the the data is copied to businessTable. The database gets cleared.</p><br>
						<p>businessTransaction: contains information about each transaction such as card number, card type,
						cvv, name, transaction ID.</p><br>
						<p>User: contains information about the admin, such as username and password.</p><br>
					</div>	
				</div>
								
				</div><br />					
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

