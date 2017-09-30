<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
<title>Cart</title>
</head>
<body style="background-image: url('https://i.imgur.com/eIjNpSh.jpg');">
<center>
	<p>Here is a list of the items in your cart: </p>
	<p>(To delete an item, check the box next to its name and click "update cart".)</p>
	<?php 
		$_SESSION["c1"] = $_POST["c1"];
		$_SESSION["c2"] = $_POST["c2"];
		$_SESSION["c3"] = $_POST["c3"];
		if (isset($_SESSION[c1]))
			$_SESSION["p1"] = false;
		if (isset($_SESSION[c2]))
			$_SESSION["p2"] = false;
		if (isset($_SESSION[c3]))
			$_SESSION["p3"] = false;
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<?php 
			if (is_string($_SESSION["p1"])) 
				echo $_SESSION["p1"]."<input type='checkbox' name='c1'><br>";
			if (is_string($_SESSION["p2"]))
				echo $_SESSION["p2"]."<input type='checkbox' name='c2'><br>";			
			if (is_string($_SESSION["p2"])) 
				echo $_SESSION["p3"]."<input type='checkbox' name='c3'><br>";			
		?>
		<input type="submit" name="submit" value="Update cart">
	</form>
	<br><!-- https://still-inlet-46901.herokuapp.com/prove03/prove03.php -->
	<a href="https://still-inlet-46901.herokuapp.com/prove03/prove03.php">Click here for more shopping</a>
	<br><!-- https://still-inlet-46901.herokuapp.com/prove03/check.php -->
	<a href="https://still-inlet-46901.herokuapp.com/prove03/check.php">Click here to checkout</a>
</center>
</body>
</html>