<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$categoryId = $_POST['categoryId'];
	$categoryName = $_POST['categoryName'];

	$sql = "INSERT INTO category (category_id,category_name) VALUES ('$categoryId','$categoryName')";

	if($connect->query($sql) === TRUE) {
	 	

			header('location: http://localhost/telephone/category.php');	



	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the category.";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
}