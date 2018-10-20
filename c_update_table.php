<?php include "db.php";
	$id = $_GET['id'];
	$sql = "UPDATE customers SET CNoOfBookings=CNoOfBookings +1 WHERE CNo=$id ;";
	if ($conn->query($sql) === TRUE) {
		echo "Updated Succesfully";
	    include ('c_search.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>