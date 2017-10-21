<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Image Upload</title>
<head>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
</head>
<body>
	<?php
		require "dbConnect.php";
		$db = get_db();
		/*
		try
		{
			$user = 'postgres';
  			$password = 'aurelius6908';
  			$db = new PDO('pgsql:host=127.0.0.1;dbname=projectDB', $user, $password);
		}
		catch (PDOException $ex)
		{
  			echo 'Error!: ' . $ex->getMessage();
  			die();
		} */
	?>
	<!--
	<?php
		$usernameErr = $dateErr = $imageURLErr = $imageErr = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  			if (empty($_POST["username"])) {
    			$usernameErr = "Username is required";
  			} else {
    			$username = test_input($_POST["username"]);
  			}
  
  			if (empty($_POST["date"])) {
    			$dyateErr = "Date is required";
  			} else {
    			$date = test_input($_POST["date"]);
  			}
  
  			if (empty($_POST["image"])) {
    			$imageErr = "Image name is required";
  			} else {
    			$image = test_input($_POST["image"]);
  			}
  
  			if (empty($_POST["imageURL"])) {
    			$imageURLErr = "Image URL is required";
  			} else {
    			$imageURL = test_input($_POST["imageURL"]);
  			}
		}

		function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}
	?>	
	<p>Please enter all the following information. <br>
	<b>We can't store images on a postgres database, but we can store image links!
	</p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		Your name: <input type="text" name="username">
  			<span class="error">* <?php echo $usernameErr;?></span>
  			<br><br>
  		Image name: <input type="text" name="image">
  			<span class="error">* <?php echo $imageErr;?></span>
  			<br><br>
  		Image URL: <input type="text" name="imageURL">
  			<span class="error">* <?php echo $imageURLErr;?></span>
  			<br><br>
  		Date: <input type="text" name="date">
  			<span class="error">* <?php echo $dateErr;?></span>
  			<br><br>
  		<input type="submit" name="submit" value="Submit">   		
	</form><?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
	-->
	<p>Please enter all the following information. <br>
	<b>We can't store images on a postgres database, but we can store image links!
	</p> 
	<form action="insert.php" method="post">
		Your name (Joe): <input type="text" name="username" ><br>
  		Image name (Cool Guy): <input type="text" name="image" ><br>
  		Image URL: <input type="text" name="imageURL" ><br>
  		Date (YYYY-MM-DD): <input type="text" name="date" ><br>
  		<input type="submit" name="submit" value="Submit">   		
	</form>  		
</body>
</html>