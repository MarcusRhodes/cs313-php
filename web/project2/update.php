<?php
session_start();
$newDate = $_POST['date'];
$ID = $_SESSION['ID'];
//require("dbConnect.php");
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

try
{
	$query0 = 'INSERT INTO imageDate(date) VALUES(:newDate)';
	$statement = $db->prepare($query0);
	$statement->bindValue(':newDate', $newDate);
	$statement->execute();
	
	$query1 = "UPDATE image SET (date) = (:newDate) WHERE (imageid) = (:ID)";
	$statement = $db->prepare($query1);
	$statement->execute(array(':newDate' => $newDate, ':ID' => $ID));
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: project.php");
die(); 
?>