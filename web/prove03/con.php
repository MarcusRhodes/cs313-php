<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
<title>Final</title>
</head>
<body style="background-image: url('http://i.imgur.com/2t4FHhL.jpg');">
<center>
	<?php 
		if (is_string($_SESSION["p1"]))
			echo "<img src='http://pre14.deviantart.net/1226/th/pre/f/2015/148/0/5/sad_pepe__feels_bad_man__vector_by_hirussai-d8uq43y.png'
				style='width:115px;height:109px;'>".$_SESSION["p1"]."<br>";
		if (is_string($_SESSION["p2"]))
			echo "<img src='https://ih1.redbubble.net/image.109168945.9975/flat,800x800,075,f.u1.jpg'
				style='width:115px;height:109px;'>".$_SESSION["p2"]."<br>";
		if (is_string($_SESSION["p3"]))
			echo "<img src='http://i0.kym-cdn.com/entries/icons/original/000/021/523/R14kkDj.png'
				style='width:115px;height:109px;'>".$_SESSION["p3"]."<br>";
		echo $_SESSION["a1"]."<br>";
		echo $_SESSION["a2"]."<br>";
		echo $_SESSION["a3"]."<br>";
		echo $_SESSION["a4"]."<br>";
		
		session_unset();
		session_destroy();
	?>
</body>
</html>