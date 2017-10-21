<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="project.css">
</head> 
<title>Image Gallery</title>
<body> 
	<center>
	<h1>Image Gallery</h1>
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
	<form action="projectp2.php" method="post">
		<table style="width:100%">
			<tr>
			<?php
				$num = 0;
				foreach ($db->query('SELECT title, imageid, image FROM image') as $row)
				{
					echo '<td>';
   				echo '<button type="submit" name="imageid" value="' . $row['imageid'] 
   					. '">' . $row['title'] . '<br><img src="' . $row['image'] . 
   					'" style="height="100%" width="100%""></button><br><br>';
			   		
	   			/*echo '<input type="image" src="' . $row['image'] 
   				. '" style="height="10%" width="10%" name="imageid" value="' 
   				. $row['imageid'] . '"><br><br>';   */
   				echo '</td>';
   				$num += 1;
   				if($num == 5) {
   					echo '</tr><tr>';
   					$num = 0;
   				}
				}
			?>
			</tr>
		</table>
	</form>
	<h3>Want to upload an image to the gallery? Click <a href="project3.php">here</a>!</h3>
	</center>
</body>
</html>