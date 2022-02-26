<?php 
require_once 'core.php';
$user_id = $_SESSION['userId'];
$sql = "SELECT bills.bill_id,bills.bill_date,bills.client_name,bills.client_contact,bills.plan_id,bills.plan_type,bills.category_id,bills.category_name,bills.total_amount,bills.payment_type FROM bills WHERE bills.user_id = {$user_id}";
// $query = $connect->query($sql);
// $result = $query->fetch_assoc();







$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

	
	

 while($row = $result->fetch_array()) {
 


 	$output['data'][] = array( 		
 		$row[0],
 		$row[1], 
 		$row[2],
 		$row[3],
         $row[4], 	
         $row[5], 	 	
		$row[6],
		$row[7],
        $row[8],
        $row[9], 	 	
 		
 				
 		); 	
 }
}

$connect->close();

echo json_encode($output);