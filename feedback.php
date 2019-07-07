<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";

	$mail1 = $name1  = $comment1 ="";
	
	// password is for database and pass is the user password
	$dbname = "book_store";
	$tablename = "feedback";

	// echo "My first PHP script!<br>";
	$mail1 = test_input($_POST["feedback_mail"]);
	
	$name1 = test_input($_POST["feedback_name"]);
	$comment1 = test_input($_POST["feedback_comment"]);

	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "insert into $tablename (name,email,comment) VALUES ('$name1','$mail1','$comment1')";

	if ($conn->query($sql) === TRUE) {
	    
	    $output="1";
	} 
	else {
	    $output =  "00";
	}

	
	
	echo  "$output";
	$conn->close();	

	function test_input($data) {
		$data = trim($data);
	  	$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}
?>
