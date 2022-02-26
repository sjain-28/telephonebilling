<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$plan_id = $_POST["plan_id"];

	$sql2 = "DELETE from plans where plan_id = '$plan_id'";


	if($connect->query($sql2) === TRUE) {

		header('location: http://localhost/telephone/plans.php');	

	} else {
	 	echo "Failed!";
	}
	  
}