<?php include "db.php"?>
<?php
	$conn = new mysqli("localhost", "root", "", "celcabs");
	$username = $_POST['username'];
	$username = mysqli_real_escape_string($conn, $username);
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($conn, $password);
	$sql = "SELECT * FROM login_details WHERE username='$username' and password = '$password' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// $login_tym = date('Y-m-d H:i:s');
		$sql1 = "INSERT INTO login_timestamp values('$username', now() );";
		// if (mysqli_query($conn, $sql1)) {
		//      echo "";
		// }
		include('c_search.php');
	}
	else{
		// echo 'Login Credentials failed';
		// echo '<a href="index.html">Go Back</a>';
		include('wrong_login.html');
	}
?>