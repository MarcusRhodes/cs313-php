<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="project.css">
</head> 
<title>Oldest to Newest</title>
<body> 
	<center>
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
	<table style="width:100%">
		<tr>
		<?php
			$num = 0;//select title, imagedate, username, imageid from image, imageDate where image.date = imageDate.date;		
			foreach ($db->query('select title, imageid, image from image left outer join imageDate on (imageDate.date = image.date);') as $row)
			{
				echo '<td>';
  				echo '<button type="submit" name="imageid" value="' . $row['imageid'] 
  					. '">' . $row['title'] . '<br><img src="' . $row['image'] . 
  					'" style="height="100%" width="100%""></button><br><br>';
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
	<br>
	<?php
		echo '<br><br><a href="project.php">Click here to go back!</a>';
	?>
	</center>
</body>
</html>