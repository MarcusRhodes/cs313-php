<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
<title>Storefront</title>
</head>
<body style="background-image: url('https://i.imgur.com/eIjNpSh.jpg');">
<center><!-- https://still-inlet-46901.herokuapp.com/prove03/cart.php -->
	<?php 
		$_SESSION["p1"] = $_POST["p1"];
		$_SESSION["p2"] = $_POST["p2"];
		$_SESSION["p3"] = $_POST["p3"];
	?>
	<form action="prove03.php" method="post">
		<h3>Meme Menagerie</h3>
		<p>Welcome to the world of memes.</p>
		<br>
		<div id="div1"><img src="http://pre14.deviantart.net/1226/th/pre/f/2015/148/0/5/sad_pepe__feels_bad_man__vector_by_hirussai-d8uq43y.png"
			style="width:115px;height:109px;">
			Pepe 
			<input type="checkbox" name="p1" value="Pepe">
		</div>
		<div id="div2"><img src="https://ih1.redbubble.net/image.109168945.9975/flat,800x800,075,f.u1.jpg"
			style="width:115px;height:109px;">Smug Pepe <input type="checkbox" name="p2" value="Smug Pepe">
		</div>
		<div id="div3"><img src="http://i0.kym-cdn.com/entries/icons/original/000/021/523/R14kkDj.png"
			style="width:110px;height:89px;">Apu Apustaja <input type="checkbox" name="p3" value="Apu Apustaja">
		</div>
		<input type="submit" value="Add to cart">
	</form>
	<a href="https://still-inlet-46901.herokuapp.com/prove03/cart.php">View Cart</a>
</center>
</body>
</html>