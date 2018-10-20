<?php include "db.php"; ?>
<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer's Information</title>
	<link rel="stylesheet" href="css/style.css">
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"-->
   <!--link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet"-->
   <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css"> 
   <!-- Font Awesome -->
   <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
</head>
<body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>    
	<div class="wrapper fadeInDown">
		<div id="formContent">

		  <!-- Logo -->
		  <div class="fadeIn first">
				<h2>Customer Name</h2>
			</div>
			  
	  	<!-- Login Form -->
			<div>
				<div class="search-container">
		 			<form action="c_details.php" method="POST">
						<!--input type="text" class="fadeIn second" name="CName"-->
						<input type="text" class="auto" name="CName">
						<input type="submit" class="fadeIn third" value="Search" name="button">
						<input type="submit" class="fadeIn third" value="View All" name="all">
						<br>
						<a href="c_insert.html" style="color: black;">Add New Customer</a>
					</form> 
				</div>	
			</div>	

			<script type="text/javascript">
        	$(function() {
            $(".auto").autocomplete({
               source: "search.php",
               minLength: 1
            });                
        	});
		  	</script>
		  
		</div>
	</div>
</body>
</html>