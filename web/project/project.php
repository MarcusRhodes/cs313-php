<?php
session_start();
?>
<html>
<title>Image Gallery</title>
<body> 
<center>
<h1>Image Gallery</h1>
<?php
	$dbUrl = getenv('postgres://postgres:aurelius6908@localhost:5432/cs313db');
	$dbopts = parse_url($dbUrl);
	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');;
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

//This is the same thing, but for Heroku
//$dbUrl = getenv('DATABASE_URL');

//$dbopts = parse_url($dbUrl);

//$dbHost = $dbopts["host"];
//$dbPort = $dbopts["port"];
//$dbUser = $dbopts["user"];
//$dbPassword = $dbopts["pass"];
//$dbName = ltrim($dbopts["path"],'/');

//$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
?>
<?php
echo '<form action="projectp2.php" method="post">';
foreach ($db->query('SELECT * FROM image') as $row)
{
	echo 'Title: ' . $row['title'] . '<br>';
   echo '<input type="submit" name="imageid" value="' . $row['imageid'] . '">
   	<img src="' . $row['image'] . '" style="height=' . '"10%" width=' 
   	. '"10%"><br><br>';
}
echo '</form>';
?>
</center>
</body>
</html>