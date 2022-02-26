<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());


if($_POST) {	

	$planId = $_POST['plan_id'];
	$planCost = $_POST['plan_cost'];
	$planDuration = $_POST['plan_duration'];
	$planType = $_POST['plan_type'];
	$categoryId = $_POST['category_id'];
	
	$sql = "INSERT INTO plans (plan_id,plan_cost,plan_duration,plan_type,category_id) VALUES ('$planId','$planCost','$planDuration' , '$planType',$categoryId)";

	if($connect->query($sql) === TRUE) {
	 	

					header('location: http://localhost/telephone/plans.php');	



	} 
	else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the plan.";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
}