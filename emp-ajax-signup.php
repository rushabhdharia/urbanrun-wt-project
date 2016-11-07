<?php

	header('Content-type: application/json');

	require_once 'config.php';
	
	$response = array();

	if ($_POST) {
		
		//$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['cpassword']);
		
		//$full_name = strip_tags($name);
		$emp_email = strip_tags($email);
		$emp_pass = strip_tags($pass);
		
		// sha256 password hashing
		$hashed_password = hash('sha256', $emp_pass);
		
		$query = "INSERT INTO tbl_emp(empEmail,empPassword) VALUES(:email, :pass)";
		
		$stmt = $DBcon->prepare( $query );
		//$stmt->bindParam(':name', $full_name);
		$stmt->bindParam(':email', $emp_email);
		$stmt->bindParam(':pass', $hashed_password);
		
		// check for successfull registration
        if ( $stmt->execute() ) {
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; registered sucessfully, you may login now';
        } else {
            $response['status'] = 'error'; // could not register
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
        }	
	}
	
	echo json_encode($response);