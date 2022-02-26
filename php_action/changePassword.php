<?php 

require_once 'core.php';

if($_POST) {


	$valid['success'] = array('success' => false, 'messages' => array());

	$currentPassword = md5($_POST['password']);
	$nPassword = md5($_POST['npassword']);
	$cPassword = md5($_POST['cpassword']);
	$userId = $_POST['admin_id'];

	$sql ="SELECT * FROM admin WHERE admin_id = {$userId}";
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();

	if($currentPassword == $result['password']) {

		if($nPassword == $cPassword) {

			$updateSql = "UPDATE admin SET password = '$nPassword' WHERE admin_id = {$userId}";
			if($connect->query($updateSql) === TRUE) {
				
					header('location: http://localhost/telephone/logout.php');	

			}
		} else{

					header('location: http://localhost/telephone/php_action/passwordVerificationError.php');	

			}

	} else{

					header('location: http://localhost/telephone/php_action/currentPasswordError.php');	

			}

	$connect->close();
}
?>