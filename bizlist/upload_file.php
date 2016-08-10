<?php 
if (isset($_REQUEST['sts'])) {
	$sts = $_REQUEST['sts'];
}
else {
	$sts = "";
}
?>
<?php
if ($sts == "approved"){
	
	$cid = $_REQUEST['cid'];
	
	Include("connect_pdo.php");

	$sql = "INSERT INTO businessTable (name, address, telephone, email, info, type, category, image, status) SELECT name, address, telephone, email, info, type, category, image, status FROM businessPending ORDER BY id DESC LIMIT 1";
	$stmt = $db->query($sql);
	$sql = "UPDATE `businessTable` SET `transaction_id` = '$cid' ORDER BY id DESC LIMIT 1";
	$stmt = $db->query($sql);
		
	$sql = "TRUNCATE businessPending";
	$stmt = $db->query($sql);
	
	echo "Transaction successful - Congratulations!<br />";
	$link = 'location.href="http://mayar.abertay.ac.uk/~1206633/bizlist/submit.php"';
	echo "<input type=button onClick='$link' value='GO BACK'/>";
	
	} else if ($sts == "declined") {
		
	echo "Sorry! Card Issuer has declined the payment request!<br />";
	$link = 'location.href="http://mayar.abertay.ac.uk/~1206633/bizlist/submit.php"';
	echo "<input type=button onClick='$link' value='GO BACK'/>";
		
	} else {
		
		Include("connect_pdo.php");
		$imagename = basename($_FILES["fileToUpload"]["name"]);
		$type = $_POST['type'];

if(isset($_FILES['fileToUpload'])) 
{
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			//echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			//echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			//echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			
				//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
			}
		}
}

function writeData($db, $name, $address, $telephone, $email, $info , $type, $category)
					{
						$imagename = basename($_FILES["fileToUpload"]["name"]);
						if ($imagename == "")
						{
							$imagename = "nobusiness.jpeg";
						}
						$stmt = $db->prepare("INSERT INTO businessPending (name, address, telephone, email, info, type, category, image, status) VALUES (:name,:address,:telephone,:email,:info,:type,:category,:image,:status)");
						$stmt->execute(array(':name' => $name, ':address' => $address, ':telephone' => $telephone, ':email' => $email, ':info' => $info, ':type' => $type, ':category' => $category, ':image' => $imagename, ':status' => 'pending'));
					}
							
					writeData($db, $_POST['name'], $_POST['address'], $_POST['telephone'], $_POST['email'], $_POST['info'], $_POST['type'], $_POST['category'], $_POST['image'], $_POST['status']);	
		
		$ch = curl_init("http://mayar.abertay.ac.uk/~1206633/aberpay/payment_sim.php");
		curl_exec($ch);
					
	}	
?>