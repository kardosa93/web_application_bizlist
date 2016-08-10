<?php 
	//code is taken from another website, see task4 footer
	Include("connect_mysql.php");
    //code for pagination
	$count = "SELECT COUNT(image) FROM businessTable WHERE type='PREMIUM'";
	$count_result = mysql_query($count) or die(mysql_error());
	$row = mysql_fetch_row($count_result);
	$total_records = $row[0];
	$total_pages = ceil($total_records / 4);
	
	//display the image
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	$start_from = ($page-1) * 4; 
	$sql = "SELECT image, name, address, telephone, email, info, type FROM businessTable WHERE type='PREMIUM' LIMIT $start_from, 4"; 
    $result = mysql_query($sql) or die(mysql_error());
	echo "<div class='section group'>";
	echo "<div class='clear'> </div>";
    while($row = mysql_fetch_array($result)){
		echo "<div class='listview listview_images'>";
		echo "<div class='listimg listview_img'>";
		echo "<img src=\"images/".$row['image']."\"  alt=''/>";
		echo "</div>";
		echo "<div class='text listview_text'>";
		echo "<h3>".$row['name']."</h3>";
		echo "<p>Address: ".$row['address']."</p>";
		echo "<p>Telephone: ".$row['telephone']."</p>";
		echo "<p>E-Mail: ".$row['email']."</p>";
		echo "<p>Info: ".$row['info']."</p>";
		echo "<p>Type: ".$row['type']."</p>";
		echo "</div>";
		echo "</div>";
	}
	echo "</div>";
	echo "<div class='clear'> </div><br />";
	echo "<div class='pagination'>";
	for ($i=1; $i<=$total_pages; $i++) {	 
    echo "<a href='index.php?page=".$i."'>".$i."</a> "; 
	};
	echo "</div>"; 
	
    mysql_close($connection);
	
?>