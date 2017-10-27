<?php
$username = $_POST['username'];
$imageTitle = $_POST['image'];
$imageDate = $_POST['date'];
$imageData = $_POST['imageURL'];
require("dbConnect.php");
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
}
*/
try
{
	$query1 = 'INSERT INTO users(name) VALUES(:username)';
	$statement = $db->prepare($query1);
	$statement->bindValue(':username', $username);
	$statement->execute();
	
	$query2 = 'INSERT INTO imageTitle(title) VALUES(:imageTitle)';
	$statement = $db->prepare($query2);
	$statement->bindValue(':imageTitle', $imageTitle);
	$statement->execute();
	
	$query3 = 'INSERT INTO imageDate(date) VALUES(:imageDate)';
	$statement = $db->prepare($query3);
	$statement->bindValue(':imageDate', $imageDate);
	$statement->execute();
	
	$query4 = 'INSERT INTO imageData(image) VALUES(:imageData)';
	$statement = $db->prepare($query4);
	$statement->bindValue(':imageData', $imageData);
	$statement->execute();
	
	$query5 = 'INSERT INTO image(username, title, date, image) 
	VALUES(:username, :imageTitle, :imageDate, :imageData)';
	$statement = $db->prepare($query5);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':imageTitle', $imageTitle);
	$statement->bindValue(':imageDate', $imageDate);
	$statement->bindValue(':imageData', $imageData);	
	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: project.php");
die(); 
?>