<?php
//display PHP errors
ini_set("display_errors", 1);
error_reporting(E_ALL);

function display($id)
{
	//Connect to the database 
	Include("connect_pdo.php");

	//read any data from the 'booklist' table with a simple SELECT query
	$sql = "SELECT name, address, telephone, email, info, type, category, image FROM businessTable WHERE id=$id";
	//execute the query and put the result in a string
	$output = "No data found";
								 
	$stmt = $db->query($sql);
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
								 
	if ($results) 
	{
		$output = "";
		foreach($results as $row) 
		{	
			$output .="<div class='listview listview_images_single'>";
			$output .="<div class='text listview_text_single'>";
			$output .="<h3>".$row['name']."</h3>";
			$output .="<p>Address: ".$row['address']."</p>";
			$output .="<p>Telephone: ".$row['telephone']."</p>";
			$output .="<p>E-Mail: ".$row['email']."</p>";
			$output .="<p>Info: ".$row['info']."</p>";
			$output .="<p>Type: ".$row['type']."</p>";
			$output .="<p>Category: ".$row['category']."</p>";
			$output .="</div>";
			$output .="<div class='listimg listview_img_single'>";
			$output .="<img src=\"images/".$row['image']."\" />";
			$output .="</div>";
			$output .="</div>";
		}
	}	

	// return the string of result so that they can be output
	return $output;
}
?>