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
<?php
	$ID = $_POST['imageid'];
	foreach ($db->query("SELECT * FROM image WHERE imageid = '$ID'") as $row)
	{
		echo '<h1>Image ' . $row['imageid'] . '</h1>';
		echo '<h3>' . $row['title'] . '</h3>';
		echo 'Date: ' . $row['date'] . '  User: ' . $row['username'] . '<br>';
		echo '<img src="' . $row['image'] . '" style="height="40%" width="40%"">';
	}
	
	echo '<br><br><a href="project.php">Click here to go back!</a>';
	session_unset();
	session_destroy();
?>
</center>
</body>
</html>