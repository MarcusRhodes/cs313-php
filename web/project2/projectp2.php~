<?php
session_start();
?>
<html>
<title>Image</title>
<head>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
<center>
	<div>
		<h1>Meme Gallery</h1>
	</div>
	<?php
		//require "dbConnect.php";
		//$db = get_db();
		
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
		}
		
	?>
	<?php
		$ID = $_POST['imageid'];
		$_SESSION['ID'] = $ID;		
		foreach ($db->query("SELECT * FROM image WHERE imageid = '$ID'") as $row)
		{
			echo '<h2>Image ' . $row['imageid'] . '</h2>';
			echo '<h3>' . $row['title'] . '</h3>';
			echo 'Date: ' . $row['date'] . '  User: ' . $row['username'] . '<br>';
			echo '<img src="' . $row['image'] . '" style="height="40%" width="40%"">';
		}
		$_SESSION["image"] += 1;
		
		echo '<br><br><a href="project.php">Click here to go back!</a>';
	?>
	<h4>If you want to change the date on this image, input it below and click submit.</h4>
	<form action="update.php" method="post">
		Date (YYYY-MM-DD): <input type="text" name="date" ><br>
  		<input type="submit" name="submit" value="Submit">   		
	</form>   		
</center>
</body>
</html>