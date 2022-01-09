<?php session_start();
require "Cart.php";
require "Product.php";

$cart = new Cart();
$price = 0;
if (isset($_SESSION['price']))
{
  $price = $_SESSION['price'];
}

$cart->add(new Product($price));

if(isset($_POST['newPrice'])) {
    $product = new Product($_POST['newPrice']);
    $cart->add($product);
}
?>

<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Cart</title>
</head>
<body>
<div class="cont">
  <center>
  <form action="" method="post">
  <p>Add new product price: <input type="number" size="50" value="0" name="newPrice">
  <input type="submit" value="add new product" name="submitbutton" id="addToCart"></p>
  </form>
  	<table border="1"> 
	<?php
     $_SESSION['price'] = $cart->getPrice();
 	    echo "The price of the cart is "  ,$cart->getPrice(), " €";
 	?>
  	</table>
  </center>
</div>
</body>
</html>