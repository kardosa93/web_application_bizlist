<?php 
	$cnumber = $_REQUEST['number'];
	$ctype = $_REQUEST['type'];
	$cvv = $_REQUEST['cvv'];
	$cname =$_REQUEST['name'];
	$cid = substr($cnumber, 0, 3).$ctype.$cvv;
	
	Include("connect_pdo.php");
	
	// saves tranasction in transaction table
		function writeData($db, $cnumber, $ctype, $cvv, $cname)
					{
						$cid = substr($cnumber, 0, 3).$ctype.$cvv;
						$stmt = $db->prepare("INSERT INTO businessTransaction (number, type, cvv, name, cid) VALUES (:cnumber,:ctype,:cvv,:cname,:cid)");
						$stmt->execute(array(':cnumber' => "$cnumber", ':ctype' => "$ctype", ':cvv' => "$cvv", ':cname' => "$cname", ':cid' => $cid));
					}
							
					writeData($db, $_POST['number'], $_POST['type'], $_POST['cvv'], $_POST['name'], $_POST['cid']);	
	
	// check if it starts with 99	
	$find   = '99';
	$pos = strpos($cnumber, $find);
				
	// if no the transaction is declined
	if ($pos === false){		   
		$check =  curl_init("http://mayar.abertay.ac.uk/~1206633/bizlist/upload_file.php?sts=declined");
		curl_exec($check);
	// if yes, transaction is approved
	} else {		   
		$check =  curl_init("http://mayar.abertay.ac.uk/~1206633/bizlist/upload_file.php?sts=approved&cid=".$cid);
		curl_exec($check);
	}
?>