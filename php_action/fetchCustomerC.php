<?php 
require_once 'core.php';
$user_id = $_SESSION['userId'];
$sql = "SELECT * FROM users WHERE user_id = {$user_id}";
// $query = $connect->query($sql);
// $result = $query->fetch_assoc();







$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

	$activeProduct = ""; 
	

 while($row = $result->fetch_array()) {
 
		if($row[3] >= 1) {
 		$activeProduct = "<label class='label label-info'>Active</label>";
 	} else {
 		$activeProduct = "<label class='label label-danger'>Not Active</label>";
 	}

 	$output['data'][] = array( 		
 		$row[0],
 		$row[1], 
 		$row[4],
 		$row[5], 	
		$activeProduct,	
		$row[6],
		$row[7],
	
 		
 				
 		); 	
 }
}

$connect->close();

echo json_encode($output);