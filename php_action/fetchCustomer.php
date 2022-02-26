<?php 	

require_once 'core.php';

$sql = "SELECT users.user_id,users.password, users.username, users.customer_status,
 		users.customer_address,users.customer_email,users.plan_id,users.category_id,plans.plan_type, category.category_name,bills.bill_id FROM users 
		INNER JOIN plans ON users.plan_id = plans.plan_id 
		INNER JOIN category ON category.category_id = plans.category_id INNER JOIN bills on users.bill_id = bills.bill_id";

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
		$row[10],
 		$row[2], 
 		$row[4],
 		$row[5], 	
		$activeProduct,	
		$row[8],
		$row[9],
 		
 				
 		); 	
 }
}

$connect->close();

echo json_encode($output);