<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$order_date = $_POST["date"];
    $user_id = $_POST["userId"];
	$client_name = $_POST["username"];
	$client_contact = $_POST["contact"];
    $client_email = $_POST["client_email"];
	$plan_id = $_POST["plan_id"];
	$plan_type =  $_POST["plan_type"];
	$category_id = $_POST["category_id"];
	$category_name =  $_POST["category_name"];

	$total_amount = $_POST["plan_cost"];
	
	$payment_type = $_POST["paymentType"];

	$sql = "INSERT INTO bills (
	 bill_date,
	 client_name,
     client_email,
     user_id,
	 total_amount, 
	 payment_type,
     client_contact,
     plan_type,
     category_name,
	 plan_id,
     category_id
	 )
	 VALUES (
	 '$order_date', 
	 '$client_name', 
     '$client_email',
     '$user_id',
     '$total_amount', 
	 '$payment_type',
	 '$client_contact', 
	 '$plan_type',
     '$category_name',
     '$plan_id',
     '$category_id'	 
	)";

	if($connect->query($sql) === TRUE) {




	header('location: http://localhost/telephone/billC.php');	

	} else {
	 	echo "Failed!";
	}
	  
}