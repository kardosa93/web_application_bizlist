<?php
include('session.php');
?>

<?php 
	Include("displayPending.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Electronic Business Directory</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!---start-header---->
			<div class="header">
				<div class="wrap">
					<!---start-logo---->
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" title="logo" /></a>
					</div>
						<div class="profile">
						<h1>Welcome <i><?php echo $login_session; ?></i></h1>
						<h2><a href="logout.php">Log Out</a></h2>
						</div>
					<div class="clear"> </div>
					<!---end-logo---->
				</div>
			</div>
				<div class="clear"> </div>
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
					<h5>Pending Business Submissions</h5>	
					</div><br/>
					<div class="clear"> </div><br />					
					<table>
						<thead>
							<tr>
							<th>INDEX</th>
							<th>NAME</th>
							<th>TYPE</th>
							<th>CATEGORY</th>
							<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								echo getData();
							?>
						</tbody>
					</table>
					<div class="clear"> </div><br/>
					
					<div class="services">	
					<h5>Denied Business Submissions</h5>	
					</div><br/>
					
					<table>
						<thead>
							<tr>
							<th>INDEX</th>
							<th>NAME</th>
							<th>TYPE</th>
							<th>CATEGORY</th>
							<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								echo getDataTwo();
							?>
						</tbody>
					</table>
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

