<?php 	

require_once 'core.php';

$sql = "SELECT category_id, category_name FROM category";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 while($row = $result->fetch_array()) {
 	$categoryId = $row[0];

 

 	$output['data'][] = array( 
 		$row[0],		
 		$row[1], 
 		
 		); 	
 }

}
$connect->close();

echo json_encode($output);