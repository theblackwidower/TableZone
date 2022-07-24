<?php

require('database/DBcontroller.php');

require('database/product.php');

$db = new DBcontroller();

$product = new product($db);

?>
