<?php 	

require_once 'core.php';

$sql = "SELECT plan_id,  plan_cost, plan_duration, plan_type FROM plans ";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 




 while($row = $result->fetch_array()) {
 	$brandId = $row[0];



 	$output['data'][] = array( 	
 		$row[0],	
 		$row[1],
		$row[2],
		$row[3],
 			
 		
 		); 	
 }
}

$connect->close();

echo json_encode($output);