<?php 	

require_once 'core.php';

$sql = "SELECT customers.customer_id, customers.customer_name, 
 		customers.customer_address,customers.customer_email,customers.customer_status,customers.plan_id,customers.category_id,plans.plan_type, category.category_name FROM customers 
		INNER JOIN plans ON customers.plan_id = plans.plan_id 
		INNER JOIN category ON customers.category_id = category.category_id";

$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

	$activeProduct = ""; 
	

 while($row = $result->fetch_array()) {
 
		if($row[4] >= 1) {
 		$activeProduct = "<label class='label label-success'>Available</label>";
 	} else {
 		$activeProduct = "<label class='label label-danger'>Not Available</label>";
 	}


 	$output['data'][] = array( 		
 		$row[0],
 		$row[1], 
 		$row[2],
 		$row[3], 	
		$activeProduct,	
		$row[7],
		$row[8],
 		
 				
 		); 	
 }
}

$connect->close();

echo json_encode($output);