<?php
session_start();
?>
<html>
<title>Image Gallery</title>
<body> 
<center>
<?php
	if (empty($dbUrl)) {
		$dbUrl = "postgres://postgres:password@localhost:5432/cs313db";
	}
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
	$ID = $_POST['imageid'];
	foreach ($db->query("SELECT * FROM image WHERE imageid = '$ID'") as $row)
	{
		echo '<h1>Image ' . $row['imageid'] . '</h1>';
		echo '<h3>' . $row['title'] . '</h3>';
		echo 'Date: ' . $row['date'] . '  User: ' . $row['username'] . '<br>';
		echo '<img src="' . $row['image'] . '" style="height=' . '"50%" width=' . '"50%">';
	}
		
	session_unset();
	session_destroy();
?>
</center>
</body>
</html>