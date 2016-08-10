<!DOCTYPE HTML>
<html>
<head>
<title>PaymentDetails</title>
<link href='css/style.css' rel='stylesheet' type='text/css'  media='all' />
<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
</head>
<body>					
<div class="payment-form">
		<form action="http://mayar.abertay.ac.uk/~1206633/aberpay/check.php" method="post">
		<span><label>Card Number</label></span>
		<span><input type="text" name="number" value="<?php echo $number;?>"></span>
		<div class="error"><?php echo $numberErr;?></div><br />
		<span>Card Type:</span>
		<span>VISA:<input type="radio" value="VISA" <?php if (isset($type) && $type=="VISA") echo "checked";?> name="type" >
		MasterCard:<input type="radio" value="MASTERCARD" <?php if (isset($type) && $type=="MASTERCARD") echo "checked";?> name="type"></span>
		<div  class="error"><?php echo $typeErr;?></div><br />
		<span><label>CVV</label></span>
		<span><input type="text" name="cvv" value="<?php echo $cvv;?>"></span>
		<div  class="error"><?php echo $cvvErr;?></div>
		<span><label>Cardholder Name</label></span>
		<span><input type="text" name="name" value="<?php echo $name;?>"></span>
		<div  class="error"><?php echo $nameErr;?></div><br />
										
		<span><input type="submit" value="Make Payment" name="submit"></span><br />
	</form>	
</div>	
</body>
</html>