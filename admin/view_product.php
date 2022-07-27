<?php
require_once '../functions.php';
$db = new DBcontroller();
$stmt = mysqli_prepare($db->con, "SELECT * FROM product WHERE item_id = ?;");
mysqli_stmt_bind_param($stmt, 'i', $_GET['id']);
mysqli_stmt_execute($stmt);
$data = mysqli_stmt_get_result($stmt);
$product = mysqli_fetch_row($data);
$pagename = "Product Details: ".$product[1];
require 'header.php';

echo "<img class=\"view_image\" src=\"../".$product[3]."\" />";
echo "<div class=\"product_info\">";
echo "<span class=\"key\">";
echo "Name:";
echo "</span>";
echo "<span class=\"data\">";
echo $product[1];
echo "</span><br />";

echo "<span class=\"key\">";
echo "Price:";
echo "</span>";
echo "<span class=\"data\">$";
echo number_format($product[2], 2);
echo "</span><br />";

echo "<span class=\"key\">";
echo "Register:";
echo "</span>";
echo "<span class=\"data\">";
echo $product[4];
echo "</span><br />";

echo "</div>";

require 'footer.php';
