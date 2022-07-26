<?php

require('database/DBcontroller.php');

require('database/product.php');

require('database/cart.php');


$db = new DBcontroller();

$product = new product($db);

$cart = new cart($db);


?>
