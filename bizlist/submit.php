<?php
	include('header.php');
?>
				<div class="header-nav">
					<div class="wrap">
					<div class="left-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="listing.php">Business Listing</a></li>
							<li class="active"><a href="submit.php">Submit Business</a></li>
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
					<h5>Submit Business</h5>	
					</div>	<br />
						<div class="section group">		

<?php
// define variables and set to empty values
$nameErr = $addressErr = $telephoneErr = $emailErr = "";
$name = $address = $telephone = $email ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
	
	if (empty($_POST["address"])) {
     $addressErr = "Address is required";
   } else {
     $address = test_input($_POST["address"]);
   }
   
    if (empty($_POST["telephone"])) {
     $telephoneErr = "Telephone is required";
   } else {
     $telephone = test_input($_POST["telephone"]);
	  // check if only numbers
     if (!preg_match("/^[0-9]+$/",$name)) {
       $telephoneErr = "Only numbers allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>						
							<div class="submit-form">
								<form action="upload_file.php" method="post" enctype="multipart/form-data">
										<span><label>NAME</label></span>
										<span><input type="text" name="name" value="<?php echo $name;?>"></span>
										<span class="error"> <?php echo $nameErr;?></span>
										<span><label>ADDRESS</label></span>
										<span><input type="text" name="address" value="<?php echo $address;?>"></span>
										<span class="error"> <?php echo $addressErr;?></span>
										<span><label>TELEPHONE</label></span>
										<span><input type="text" name="telephone" value="<?php echo $telephone;?>"></span>
										<span class="error"> <?php echo $telephoneErr;?></span>
										<span><label>E-MAIL</label></span>
										<span><input type="text" name="email" value="<?php echo $email;?>"></span>
										<span class="error"> <?php echo $emailErr;?></span>
										<span><label>SHORT COMMENT</label></span>
										<span><input type="text" name="info"></span><br />
										<span>SELECT CATEGORY:</span>
										<span><select name="category">
										<option value="Banking & Finance">Banking & Finance</option>
										<option value="Computing & IT">Computing & IT</option>
										<option value="Marketing">Marketing</option>
										<option value="Sales & Retail">Sales & Retail</option></select></span><br />
										
										<span>SELECT BUSINESS TYPE:</span>
										<span>STANDARD £10:<input type="radio" value="STANDARD" name="type" checked></span>
										<span>PREMIUM £50:<input type="radio" value="PREMIUM" name="type"></span><br />
										
										<span>Select image to upload:<span><br />
										<span><input type="file" name="fileToUpload" id="fileToUpload"></span><br />
										<span><input type="submit" value="Submit" name="submit"></span>
								</form>
							</div>
						</div>			
					</div>	
			</div>
			<div class="clear"> </div>
			<!---End-content---->
			<div class="clear"> </div>
		<!---start-footer---->
		<?php
			include('footer.php');
		?>
		<!---end-footer---->
	</body>
</html>

