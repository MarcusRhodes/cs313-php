<?php
session_start();
?>
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
	<p>Please enter all the following information. <br>
	<b>We can't store images on a postgres database, but we can store image links!</b>
	</p> 
	<form action="insert.php" method="post">
		Your name (Joe): <input type="text" name="username" ><br>
  		Image name (Cool Guy): <input type="text" name="image" ><br>
  		Image URL (https://www.sitename.com/imagename.jpg): <input type="text" name="imageURL" ><br>
  		Date (YYYY-MM-DD): <input type="text" name="date" ><br>
  		<input type="submit" name="submit" value="Submit">   		
	</form>  		
</body>
</html>