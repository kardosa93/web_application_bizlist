<?php
//display PHP errors
ini_set("display_errors", 1);
error_reporting(E_ALL);

function getData() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT * FROM businessTable WHERE status='pending' ORDER BY 'id' ASC ";
//execute the query and put the result in a string
 $output = "<tr><td colSpan='5'>No data found.</td></tr>";
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
  $output .="<tr>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['id']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['name']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['type']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['category']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['status']."</td>";
  $output .="</tr>";
  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

function getDataTwo() {

//Connect to the database 
Include("connect_pdo.php");
//read any data from the table with a simple SELECT query
$sql = "SELECT * FROM businessTable WHERE status='denied'";
//execute the query and put the result in a string
 $output = "<tr><td colSpan='5'>No data found.</td></tr>";
 
 $stmt = $db->query($sql);
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 if ($results) {
  $output = "";
  foreach($results as $row) {
  $output .="<tr>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['id']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['name']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['type']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['category']."</td>";
  $output .="<td><a href='authenticationBusiness.php?id=".$row['id']."'</a>".$row['status']."</td>";
  $output .="</tr>";
  
  }
 }

 // return the string of result so that they can be output
 return $output;
}

?>