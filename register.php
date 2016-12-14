<?php

include "db.php";

$f_name = $_POST["name"];
$email = $_POST['email'];
$password = $_POST['c_password'];
$repassword = $_POST['c_repassword'];
$country = $_POST['c_country'];
$city = $_POST['c_city'];
$address = $_POST['c_address'];
$mobile = $_POST['c_contact'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";
$p_number = "/[0-9]/";

if(empty($f_name)  || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address) || empty($city) || empty($country) ){

		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all the fields!</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>This $f_name is not valid!</b>
			</div>
		";
		exit();
	}

	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak, password has to be atleast 9 characters.</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak, password has to be atleast 9 characters.</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Passwords do not match! Please check!</b>
			</div>
		";
	}
	if(!(strlen($mobile) >= 9)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number has to have atleast 9 characters.</b>
			</div>
		";
		exit();
	}
	$sql = "SELECT user_id FROM customers WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email address: $email already exists. Please try another one.</b>
			</div>
		";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `customers`
		(`customer_id`, `customer_name`, `customer_email`, `customer_pass`,
		`customer_country`, `customer_city`, `customer_contact`, `customer_address`)
		VALUES (NULL, '$f_name', '$email','$password', '$country', 
		'$city', '$address','$mobile')";
		$run_query = mysqli_query($con, $sql);
		if($run_query){
			echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b> Congratulations, you have successfully registered! </b>
				</div>
			";
		}
	}
	}
?>
