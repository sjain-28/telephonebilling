<?php 

require_once 'core.php';

if($_POST) {

	$valid['success'] = array('success' => false, 'messages' => array());

	$username = $_POST['username'];
	$userId = $_POST['admin_id'];

	$sql = "UPDATE admin SET username = '$username' WHERE admin_id = {$userId}";
	if($connect->query($sql) === TRUE) {
		 
				header('location: http://localhost/telephone/logout.php');	

	}

	$connect->close();

	echo json_encode($valid);

}
?>