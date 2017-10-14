<html>
<title>Image Gallery</title>
<body> 
<center>
<?php
$dbUrl = getenv('DATABASE_URL');

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
//This is the same thing, but for Heroku
//$dbUrl = getenv('DATABASE_URL');

//$dbopts = parse_url($dbUrl);

//$dbHost = $dbopts["host"];
//$dbPort = $dbopts["port"];
//$dbUser = $dbopts["user"];
//$dbPassword = $dbopts["pass"];
//$dbName = ltrim($dbopts["path"],'/');

//$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

echo "<h1>Image Gallery</h1>";

foreach ($db->query('SELECT * FROM image') as $row)
{
	echo 'Image ' . $row['imageid'] . ' Title: ' . $row['title'] . '<br>';
   echo '<img src="' . $row['image'] . '" style="height=' . '"10%" width=' . '"10%"><br>';            
   echo 'Date: ' . $row['date'] . ' User: ' . $row['username']. '<br><br>';
}
 ?>

<!--
<?php
// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:password@localhost:5432/cs313db";
}

$dbopts = parse_url($dbUrl);

print "<p>$dbUrl</p>\n\n";

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";

try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

foreach ($db->query('SELECT now()') as $row)
{
 print "<p>$row[0]</p>\n\n";
}

?>
-->
</center>
</body>
</html>