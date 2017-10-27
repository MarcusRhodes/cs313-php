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
	<div>
		<h1>Meme Gallery</h1>
	</div>
	<p id='intro'>Welcome to the Meme gallery!
	<br>We hope you find this to be the best thing ever!
	<br>(Or at least a little amusing.)</p>
	<br>
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
		}
		*/
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
	<br>
	<?php
		echo "Here is the number of images you have viewed: " . $_SESSION["image"] . "<br>";
		echo '<a href="reset.php">Click here to reset!</a>';
		echo '<br><br><a href="alpha.php">Click here to see them oldest to newest!</a>';
	?>
	</center>
</body>
</html>