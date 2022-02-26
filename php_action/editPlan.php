<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$plan_type = $_POST['plan_type'];
	$plan_cost = $_POST['plan_cost'];
 	$plan_duration = $_POST['plan_duration'];
 	$plan_id = $_POST['plan_id'];

	$sql = "UPDATE plans SET plan_cost = '$plan_cost', plan_duration = '$plan_duration', plan_type = '$plan_type' WHERE plan_id = '$plan_id'";

	if($connect->query($sql) === TRUE) {
	 	
		header('location: http://localhost/telephone/plans.php');	


	} else {
	 	
		echo 'Failed!';

	}
	 
	$connect->close();
}