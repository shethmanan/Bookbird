<?php

	$dbname="book_store";
	$tablename = "cart";
	$conn = new mysqli("localhost","root","",$dbname);
	if($conn->connect_error){
		die("Connection Error: ".$conn->connect_error);
	}
	$uname = $_POST["uname"];
	$pname = $_POST["pname"];
	$qty = 1;
	// $uname = "manan";
	// $pname= "The Hobbit";
	$sql = "select * from $tablename WHERE uname LIKE '$uname' AND pname LIKE '$pname'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
		$qty = $row["qty"];
		$qty = $qty + 1;
		$sql = "update $tablename SET qty = '$qty' WHERE uname LIKE '$uname' AND pname LIKE '$pname'";
		$conn->query($sql);
	}
	else{
		$sql = "insert into $tablename (uname,pname,qty) VALUES ('$uname','$pname','$qty')";
		$conn->query($sql);
	}
	
?>