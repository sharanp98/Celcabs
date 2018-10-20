<?php 
	include "db.php";
	$CName = $_POST['CName'];
	$CAddress = $_POST['CAddress'];
	$CDriver = $_POST['CDriver'];
	$sql = "INSERT INTO customers (CName,CAddress,CPrefDriver) values ('$CName','$CAddress','$CDriver');";
	if ($conn->query($sql) === TRUE) {
	    include ("c_details.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>