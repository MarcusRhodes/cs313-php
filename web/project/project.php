<?php
session_start();
?>
<html>
<title>Image Gallery</title>
<body> 
<center>
<h1>Image Gallery</h1>
<?php
require "dbConnect.php";
$db = get_db();
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