<?php include "db.php"?>
<?php
if(isset($_POST['all']))
{	$query1 = "SELECT * FROM customers";
	$result = mysqli_query($conn,$query1);
}	
if(isset($_POST['button']))
{	$CName= $_POST['CName'];
	$CName=mysqli_real_escape_string($conn, $CName);
	$query="SELECT * FROM customers WHERE CName='$CName' ";
	$result = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div>
		<h3 style="width: 50%; float: left;padding-left: 2%; ">Details</h3>
	</div>
	<div>
		<a style="width: 50%; float: right;color: white; text-align: right; padding-right: 3%;" href="index.html" style="color: red;"> <b><em>Log Out</em></b> </a> 
	</div>
	<div id="the">
		<table>
			<div>
				<tr>
					<th>Customer Number</th>
					<th>Customer Name</th>
					<th>Customer Address</th>
					<th>Customer Preffered Driver</th>
					<th>Customer No Of Bookings </th>
				</tr>
			<div>	
		<?php 
			if (!$result)
				die("Query Failed");
			else{
				// output data of each row
				while($row=mysqli_fetch_assoc($result)) {
					$no = $row['CNo'];
					$name = $row['CName'];
					$add = $row['CAddress'];
					$pref = $row['CPrefDriver']; 
					$book = $row['CNoOfBookings'];
		?>		
			<div>
				<tr>
					<td> <?php echo($no); ?> </td> 
					<td> <?php echo($name); ?> </td>
					<td> <?php echo($add); ?> </td>
					<td> <?php echo($pref); ?> </td>
					<td> <?php echo($book);?> </td>
					<td>
						<a style="background-color: white;" href="c_update_table.php?id=<?php echo $no;?>">+</a>
					</td>
				</tr>
			</div>
			<?php    }
			}
		?>
		</table>
	</div>	
	<br>
	<div style="text-align: center;">
		<a style="display: inline-block; color: red;" href="c_search.php" style="color: red;"> <b><em>Go Back</em></b> </a>
	</div>
	
	
</body>
</html>