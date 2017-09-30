<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
<title>Checkout</title>
</head>
<body style="background-image: url('https://i.imgur.com/eIjNpSh.jpg');">
<center>
	<?php
		$_SESSION["a1"] = $_POST["street"];
		$_SESSION["a2"] = $_POST["city"];
		$_SESSION["a3"] = $_POST["state"];
		$_SESSION["a4"] = $_POST["zip"];
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  			$street = test($_SESSION["a1"]);
  			$city = test($_SESSION["a2"]);
			$state = test($_SESSION["a3"]);
			$zip = test($_SESSION["a4"]);
		}
		
		function test($x) {
			$x = trim($x);
			$x = stripslashes($x);
			$x = htmlspecialchars($x);
			return $x;
		}
	?>
	<p>Please enter your shipping address: </p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
   	Street: <input type="text" name="street"><br>
   	City: <input type="text" name="city"><br>
   	State: <input type="text" name="state"><br>
      Zipcode: <input type="text" name="zip"><br>      
		<input type="submit" value="Save Address">
	</form>
	<br>
	<br><!-- https://still-inlet-46901.herokuapp.com/prove03/cart.php -->	
	<a href="https://still-inlet-46901.herokuapp.com/prove03/cart.php">Return to cart</a>
	<br><!-- https://still-inlet-46901.herokuapp.com/prove03/con.php -->	
	<a href="https://still-inlet-46901.herokuapp.com/prove03/con.php">Complete purchase</a>	
</center>
</body>
</html>