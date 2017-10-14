<?php
session_start();
?>
<html>
<title>Image Gallery</title>
<body> 
<center>
<h1>Image Gallery</h1>
<?php
	$db = NULL;
	try {
		$dbUrl = getenv('DATABASE_URL');
		if (!isset($dbUrl) || empty($dbUrl)) {
			$dbUrl = "postgres://postgres:aurelius6908@localhost:5432/projectDB";
		}
		
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		echo "Error connecting to DB. Details: $ex";
		die();
	}
	
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